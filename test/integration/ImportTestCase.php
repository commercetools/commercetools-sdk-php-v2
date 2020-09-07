<?php

namespace Commercetools\IntegrationTest;

use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Client\GzipRequestMiddleware;
use Commercetools\Client\ImportRequestBuilder;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Client\OAuthHandlerFactory;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ImportTestCase extends TestCase
{
    /**
     * @var ClientInterface
     */
    private static $importClient;

    private static $projectKey;

    public function getImportApiClient()
    {
        if (is_null(self::$importClient)) {
            $clientId = $_SERVER['CTP_CLIENT_ID'] ?? '';
            $clientSecret = $_SERVER['CTP_CLIENT_SECRET'] ?? '';
            self::$projectKey = $_SERVER['CTP_PROJECT_KEY'] ?? '';
            $authHandler = HandlerStack::create();
            $authHandler->push(
                MiddlewareFactory::createLoggerMiddleware(new Logger('auth', [new StreamHandler('./logs/requests.log')]))
            );
            $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret), [
                'handler' => $authHandler,
            ]);
            $logger = new Logger('client', [new StreamHandler('./logs/requests.log')]);
            $client = ClientFactory::of()->createGuzzleClientForHandler(
                new \Commercetools\Import\Client\Config(['maxRetries' => 3]),
                OAuthHandlerFactory::ofAuthConfig($authConfig),
                $logger,
                [
                    Middleware::mapRequest(new GzipRequestMiddleware())
                ]
            );
            self::$importClient = $client;
        }
        return self::$importClient;
    }

    public function getImportApiBuilder()
    {
        $client = $this->getImportApiClient();
        return new ImportRequestBuilder(self::$projectKey, $client);
    }

    protected function map(callable $callback, $collection)
    {
        $result = [];
        foreach ($collection as $item) {
            $result[] = $callback($item);
        }

        return $result;
    }
}
