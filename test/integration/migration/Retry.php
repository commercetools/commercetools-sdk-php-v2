<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Core\Client\ClientFactory;
use Commercetools\Core\Config as ConfigV1;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Middleware;
use Monolog\Logger;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Retry extends MigrationService implements MigrationInterface
{
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
                    function ($retries, RequestInterface $request, ResponseInterface $response = null, RequestException $error = null) use ($maxRetries) {
                        return $retries < $maxRetries && ($error instanceof ConnectException || $response && $response->getStatusCode() >= 500);
                    }
                )
            ]
        ];
        $config->setClientOptions($clientOptions);
        $client = ClientFactory::of()->createClient($config, new Logger('testV1'));

        return $client;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $clientId = 'my_client_id';
        $clientSecret = 'my_client_secret';
        $projectKey = 'my_project_key';

        $middlewares = [];
        $middlewares['retryNA'] = MiddlewareFactory::createRetryNAMiddleware($maxRetries = 3);
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));
        $client = \Commercetools\Client\ClientFactory::of()->createGuzzleClient(new ConfigV2(), $authConfig, null, $middlewares);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($projectKey)->get();

        $client = $request->execute();

        return $client;
    }
}
