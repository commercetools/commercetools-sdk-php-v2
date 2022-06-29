<?php


namespace Commercetools\IntegrationTest\migration\tests;


use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Api\Models\Category\Category as CategoryV2;
use Commercetools\Api\Models\Category\CategoryBuilder;
use Commercetools\Api\Models\Category\CategoryChangeNameActionModel;
use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryDraftModel;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponse;
use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Api\Models\Category\CategoryUpdateBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Client\MiddlewareFactory;
use Commercetools\Client\OAuthHandlerFactory;
use Commercetools\IntegrationTest\ApiTestCase;
use Commercetools\IntegrationTest\migration\MigrationService;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertNotSame;


class MigrationTest extends ApiTestCase
{
    public string $clientId = 'bme-3iUSJonevnAqdovBgJMp';
    public string $clientSecret = 'f-xA0DFe3ooO1bMRZZUS4WjAUKE0KgO9';
    public string $projectKey = 'barbara-mc-test';

    public function testClient()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $client = $request->execute();

        assertEquals($client->getKey(), $this->projectKey);
    }

    public function testClientWithTimeout()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();

        assertEquals($response->getKey(), $this->projectKey);
        assertEquals($client->getConfig('timeout'), 45);
    }

    public function testClientWithHeaders()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'headers' => ["foo" => "bar"]]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();

        assertEquals($response->getKey(), $this->projectKey);
        assertEquals($client->getConfig('headers')['foo'], 'bar');
    }

    public function testCreateCommand()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();
        $key = 'KEY' . $service->uniqueString();
        $categoryDraft = CategoryDraftBuilder::of()
            ->withName(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withKey($key)
            ->build();

        $request = $builder->with()->categories()->post($categoryDraft);
        $category = $request->execute();

        assertEquals($category->getKey(), $key);
    }

    public function testCreateFromJson()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();

        /** @var CategoryDraft $categoryDraft */
        $categoryDraft = CategoryDraftModel::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"), true));
        $request = $builder->with()->categories()->post($categoryDraft);
        $category = $request->execute();

        assertEquals($category->getKey(), "KEYtest-119aab2c-cfa9-4c4e-be23-836185584dara");
    }

    public function testUpdateCommand()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();

        $key = 'KEY' . $service->uniqueString();
        $categoryDraft = CategoryDraftBuilder::of()
            ->withName(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withKey($key)
            ->build();

        $request = $builder->with()->categories()->post($categoryDraft);
        $category = $request->execute();

        $newName = LocalizedStringBuilder::of()->put('en', "new-name")->build();
        $updateAction = new CategoryChangeNameActionModel();
        $updateAction->setName($newName);
        $updateActionCollection = new CategoryUpdateActionCollection();
        $updateActionCollection->add($updateAction);
        /** @var CategoryV2 $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build()
            );
        $categoryUpdated = $request->execute();

        assertNotSame($category->getVersion(), $categoryUpdated->getVersion());
        assertEquals($categoryUpdated->getName(), $newName);
    }

    public function testTimeout()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $options = ['timeout' => '45'];
        $request = $service->builderV2()->with()->categories()->get();
        $response = $request->execute($options);

        assertInstanceOf(CategoryPagedQueryResponse::class, $response);
    }

    public function testRetry()
    {
        $maxRetries = 3;
        $middlewares = [];
        $middlewares['retryNA'] = MiddlewareFactory::createRetryNAMiddleware($maxRetries);

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClientForHandler(
            new ConfigV2(),
            OAuthHandlerFactory::ofAuthConfig($authConfig),
            null,
            $middlewares
        );

        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();

        assertEquals($response->getKey(), $this->projectKey);

    }

    public function testQuery()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();

        $key = 'KEY' . $service->uniqueString();
        $categoryDraft = CategoryDraftBuilder::of()
            ->withName(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withKey($key)
            ->build();

        $request = $builder->with()->categories()->post($categoryDraft);
        $category = $request->execute();

        $request = $builder->with()->categories()->get()->withWhere("id=" . "\"" . $category->getId() . "\"");
        $result = $request->execute();

        assertEquals($category->getId(), $result->getResults()->current()->getId());
    }

    public function testHeader()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();
        $request = $builder->with()->categories()->get();

        $result = $request->withHeader("foo", "bar");

        assertEquals($result->getHeader("foo"), [0 => "bar"]);
    }

    public function testGetById()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();

        $key = 'KEY' . $service->uniqueString();
        $categoryDraft = CategoryDraftBuilder::of()
            ->withName(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', $service->uniqueString())->build())
            ->withKey($key)
            ->build();

        $request = $builder->with()->categories()->post($categoryDraft);
        $category = $request->execute();

        /** @var CategoryBuilder $category */
        $request = $builder->with()->categories()->withId($category->getId())->get()->withExpand('parent');

        $result = $request->execute();

        assertEquals($result->getId(), $category->getId());
    }
}
