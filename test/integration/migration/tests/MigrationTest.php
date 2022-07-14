<?php

namespace Commercetools\IntegrationTest\migration\tests;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Api\Models\Category\Category as CategoryV2;
use Commercetools\Api\Models\Category\CategoryBuilder;
use Commercetools\Api\Models\Category\CategoryChangeNameActionBuilder;
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
use Commercetools\IntegrationTest\ApiTestCase;
use Commercetools\IntegrationTest\migration\MigrationService;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertNotSame;

class MigrationTest extends ApiTestCase
{
    public $clientId = 'bme-3iUSJonevnAqdovBgJMp';
    public $clientSecret = 'f-xA0DFe3ooO1bMRZZUS4WjAUKE0KgO9';
    public $projectKey = 'barbara-mc-test';
    // The below values are defined as default in the related classes. This test is to demonstrate how to set up the API_URL and the OAUTH_URL
    public $apiUrl = 'https://api.europe-west1.gcp.commercetools.com';
    public $oAuthUrl = 'https://auth.europe-west1.gcp.commercetools.com/oauth/token';

    public function testClient()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret), [], $this->oAuthUrl);
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3], $this->apiUrl), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $client = $request->execute();

        assertEquals($client->getKey(), $this->projectKey);
    }

    public function testTimeout()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $options = ['timeout' => '45'];
        $request = $service->builderV2()->with()->categories()->get();
        $response = $request->execute($options);

        assertInstanceOf(CategoryPagedQueryResponse::class, $response);
    }

    public function testSetTimoutAtClientLevel()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();

        assertEquals($response->getKey(), $this->projectKey);
        assertEquals($client->getConfig('timeout'), 45);
    }

    public function testRetry()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();

        assertEquals($response->getKey(), $this->projectKey);
    }

    public function testHeaders()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();
        $request = $builder->with()->categories()->get();

        $result = $request->withHeader("foo", "bar");

        assertEquals($result->getHeader("foo"), [0 => "bar"]);
    }

    public function testSetHeadersAtClientLevel()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'headers' => ["foo" => "bar"]]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();

        assertEquals($this->projectKey, $response->getKey());
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

        assertEquals($key, $category->getKey());
    }

    public function testCreateFromJson()
    {
        $service = new MigrationService($this->clientId, $this->clientSecret, $this->projectKey);
        $builder = $service->builderV2();

        /** @var CategoryDraft $categoryDraft */
        $categoryDraft = CategoryDraftModel::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"), true));
        $request = $builder->with()->categories()->post($categoryDraft);
        $category = $request->execute();

        assertEquals("KEYtest-119aab2c-cfa9-4c4e-be23-836185584dara", $category->getKey());
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
        /** @var CategoryV2 $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions(
                        CategoryUpdateActionCollection::of()->add(CategoryChangeNameActionBuilder::of()->withName($newName)->build())
                    )->build()
            );
        $categoryUpdated = $request->execute();

        assertNotSame($category->getVersion(), $categoryUpdated->getVersion());
        assertEquals($categoryUpdated->getName(), $newName);
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

        $request = $builder->with()->categories()->get()->withWhere("key = :key")->withPredicateVar("key", $key);
        $resultWithPredicateVar = $request->execute();

        assertEquals($category->getKey(), $resultWithPredicateVar->getResults()->current()->getKey());
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

        assertEquals($category->getId(), $result->getId());
    }
}
