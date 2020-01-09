<?php

namespace Commercetools\IntegrationTest;

use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponseModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Api\Models\Product\FacetResults;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Project\ProjectModel;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Client\MeConfig;
use Commercetools\Client\MeOAuthHandlerFactory;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Client\OAuthHandlerFactory;
use Commercetools\Exception\ApiClientException;
use GuzzleHttp\HandlerStack;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class MiscTest extends TestCase
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;
    private $projectKey;

    public function setUp(): void
    {
        $clientId = $_SERVER['CTP_CLIENT_ID'] ?? '';
        $clientSecret = $_SERVER['CTP_CLIENT_SECRET'] ?? '';
        $this->projectKey = $_SERVER['CTP_PROJECT_KEY'] ?? '';

        $authHandler = HandlerStack::create();
        $authHandler->push(MiddlewareFactory::createLoggerMiddleware(new Logger('auth', [new StreamHandler('./logs/requests.log')])));

        $authConfig = new ClientCredentialsConfig(
            new ClientCredentials($clientId, $clientSecret),
            ['handler' => $authHandler]
        );
        $logger = new Logger('client', [new StreamHandler('./logs/requests.log')]);

        $client = ClientFactory::of()->createGuzzleClientForHandler(
            new Config(),
            OAuthHandlerFactory::ofAuthConfig($authConfig),
            $logger
        );
        $this->client = $client;
    }

    public function testGetRoot()
    {
        $client = $this->client;
        $response = $client->get('');

        $this->assertStringContainsString('This is the commercetools platform project API', (string) $response->getBody());
    }

    public function testGetProject()
    {
        $client = $this->client;

        $root = new ApiRoot($client);
        $response = $root->withProjectKey($this->projectKey)->get()->send();

        $project = ProjectModel::fromArray(json_decode((string) $response->getBody(), true));

        $this->assertSame($this->projectKey, $project->getKey());
        $this->assertInstanceOf(\DateTimeImmutable::class, $project->getCreatedAt());
        $this->assertInstanceOf(MessageConfiguration::class, $project->getMessages());
    }

    public function testCategories()
    {
        $client = $this->client;

        $root = new ApiRoot($client);

        $response = $root->withProjectKey($this->projectKey)->categories()->get()->send();

        $catResponse = CategoryPagedQueryResponseModel::of(json_decode((string) $response->getBody()));
        $categories = $catResponse->getResults();
        $c1 = $categories->current();
        $this->assertInstanceOf(Category::class, $c1);
        $this->assertSame($c1, $categories->current());
        $this->assertSame($c1, $categories->current());
        $categories->next();
        $c2 = $categories->current();
        $this->assertInstanceOf(Category::class, $c2);
        $this->assertNotSame($c1, $c2);
        $d = $categories->offsetGet(1);
        $this->assertSame($c2, $d);

        $t = $categories->getIterator();
        $this->assertSame($c1, $t->current());
        $t->next();
        $this->assertSame($c2, $t->current());
        $t->next();
        $this->assertNotSame($c1, $t->current());
        $this->assertNotSame($c2, $t->current());
        $t->next();
        $this->assertInstanceOf(LocalizedString::class, $c1->getName());
        $this->assertNotNull($c1->getName()->at('en'));

        $createdAt = new \DateTimeImmutable();
        $c1->setCreatedAt($createdAt);
        $this->assertSame($createdAt, $c1->getCreatedAt());
    }

    public function testSearch()
    {
        $client = $this->client;
        $root = new ApiRoot($client, ['projectKey' => $this->projectKey]);

        $t = $root->withProjectKey()->productProjections()->search()->get()->withFacet('categories.id');

        $r = $client->send($t);
        $c = $t->execute();

        $this->assertNotNull($c->getResults());
        $this->assertInstanceOf(ProductProjection::class, $c->getResults()->current());
        $this->assertInstanceOf(FacetResults::class, $c->getFacets());
    }

    public function testAnonMe()
    {
        $logger = new Logger('client', [new StreamHandler('./logs/requests.log')]);

        $clientId = $_SERVER['CTP_ME_CLIENT_ID'] ?? '';
        $clientSecret = $_SERVER['CTP_ME_CLIENT_SECRET'] ?? '';
        $this->projectKey = $_SERVER['CTP_PROJECT_KEY'] ?? '';

        $authConfig = new MeConfig(
            $this->projectKey,
            new ClientCredentials($clientId, $clientSecret)
        );

        $instanceTokenStorage = new InstanceTokenStorage();
        $handler = MeOAuthHandlerFactory::ofAuthConfig($authConfig, $instanceTokenStorage);

        $client = ClientFactory::of()->createGuzzleClientForHandler(
            new Config(),
            $handler,
            $logger
        );

        $root = new ApiRoot($client, ['projectKey' => $this->projectKey]);

        $t = $root->withProjectKey()->me()->activeCart()->get();

        $this->expectException(ApiClientException::class);
        $this->expectExceptionCode(404);

        try {
            $t->execute();
        } catch (\Throwable $e) {
            $this->assertNotNull($instanceTokenStorage->getAccessToken());
            $this->assertNotNull($instanceTokenStorage->getRefreshToken());

            throw $e;
        }
    }
}
