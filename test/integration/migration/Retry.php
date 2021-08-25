<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Client\Config as ConfigV2;
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
        $config = new ConfigV2(
            [
                'client_id' => self::CLIENT_ID,
                'client_secret' => self::CLIENT_SECRET,
                'project' => self::PROJECT_KEY
            ]
        );
        $middlewares = [];
        $middlewares['retryNA'] = MiddlewareFactory::createRetryNAMiddleware($maxRetries = 3);
        $client = \Commercetools\Client\ClientFactory::of()->createGuzzleClientForMiddlewares(
            $config,
            $middlewares
        );

        return $client;
    }
}
