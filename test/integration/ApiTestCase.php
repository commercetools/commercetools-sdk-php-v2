<?php

namespace Commercetools\IntegrationTest;

use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Client\OAuthHandlerFactory;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ApiTestCase extends TestCase
{
    /**
     * @var ClientInterface
     */
    private static $client;
    private static $projectKey;
    public function getApiClient()
    {
        if (is_null(self::$client)) {
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
                new Config(['maxRetries' => 3]),
                OAuthHandlerFactory::ofAuthConfig($authConfig),
                $logger
            );
            self::$client = $client;
        }
        return self::$client;
    }
    public function getApiBuilder()
    {
        $client = $this->getApiClient();
        return new ApiRequestBuilder(self::$projectKey, $client);
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
