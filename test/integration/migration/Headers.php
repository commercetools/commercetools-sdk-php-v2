<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\CategoryDraft;

class Headers extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = $this->clientV1();
        /** @var CategoryDraft $categoryDraft */
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $client->execute($request)->withHeader('foo', 'bar');

        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $builder = $this->builderV2();
        $request = $builder->with()->categories()->get();

        return $request->withHeader("foo", "bar");
    }

    public function v2HeadersSetAtClientLevel()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'headers' => ["foo" => "bar"]]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey(self::PROJECT_KEY)->get();

        return $request->execute();
    }
}
