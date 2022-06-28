<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Client\OAuthHandlerFactory;
use Commercetools\Core\Client\ClientFactory;
use Commercetools\Core\Config as ConfigV1;
use Commercetools\Exception\ServiceUnavailableException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Middleware;
use GuzzleHttp\RetryMiddleware;
use Monolog\Logger;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Retry extends MigrationService implements MigrationInterface
{
    public const CLIENT_ID = 'my_client_id';
    public const CLIENT_SECRET = 'my_client_secret';
    public const PROJECT_KEY = 'my_project_key';

    public function v1()
    {
        $config = ConfigV1::fromArray([
            'client_id' => self::CLIENT_ID,
            'client_secret' => self::CLIENT_SECRET,
            'project' => self::PROJECT_KEY
        ]);
        $maxRetries = 3;
        $clientOptions = [
            'middlewares' => [
                'retry' => Middleware::retry(
                    function ($retries, RequestInterface $request, ResponseInterface $response = null, $error = null) use ($maxRetries) {
                        if ($response instanceof ResponseInterface && $response->getStatusCode() < 500) {
                            return false;
                        }
                        if ($retries > $maxRetries) {
                            return false;
                        }
                        if ($error instanceof ServiceUnavailableException) {
                            return true;
                        }
                        if ($error instanceof ServerException && $error->getCode() == 503) {
                            return true;
                        }
                        if ($response instanceof ResponseInterface && $response->getStatusCode() == 503) {
                            return true;
                        }
                        return false;
                    },
                    [RetryMiddleware::class, 'exponentialDelay']
                )
            ]
        ];
        $config->setClientOptions($clientOptions);
        $client = ClientFactory::of()->createClient($config, new Logger('testV1'));

        return $client;
    }

    public function v2()
    {
        $middlewares = [];
        $middlewares['retryNA'] = MiddlewareFactory::createRetryNAMiddleware($maxRetries = 3);

        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET));
        $client = ClientFactory::of()->createGuzzleClientForHandler(
            new ConfigV2(),
            OAuthHandlerFactory::ofAuthConfig($authConfig),
            null,
            $middlewares
        );

        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();

        $result = $request->execute();

        return $result;
    }
}
