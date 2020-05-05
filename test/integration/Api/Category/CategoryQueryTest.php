<?php


namespace Commercetools\IntegrationTest\Api\Category;


use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponse;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Client\OAuthHandlerFactory;
use GuzzleHttp\HandlerStack;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class CategoryQueryTest extends TestCase
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var string
     */
    private $projectKey;

    /**
     * @var ApiRequestBuilder
     */
    private $builder;

    public function setUp(): void
    {
        $clientId = $_SERVER['CTP_CLIENT_ID'] ?? '';
        $clientSecret = $_SERVER['CTP_CLIENT_SECRET'] ?? '';
        $this->projectKey = $_SERVER['CTP_PROJECT_KEY'] ?? '';

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
        $this->client = $client;
        $this->builder = new ApiRequestBuilder($this->projectKey, $this->client);
    }

    public function testQuery()
    {
        $request = $this->builder->with()->categories()->get();

        $categoryQueryResponse = $request->execute();

        $this->assertInstanceOf(CategoryPagedQueryResponse::class, $categoryQueryResponse);
    }
}
