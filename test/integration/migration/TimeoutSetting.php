<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Exception\InvalidArgumentException;

class TimeoutSetting extends MigrationService implements MigrationInterface
{

    public function v1()
    {
        $client = $this->clientV1();

        $request = RequestBuilder::of()->categories()->query();
        $response = $client->execute($request, null, ['timeout' => '45']);

        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $service = new MigrationService(self::CLIENT_ID, self::CLIENT_SECRET, self::PROJECT_KEY);
        $options = ['timeout' => '45'];
        $request = $service->builderV2()->with()->categories()->get();
        $response = $request->execute($options);

        return $response;
    }

    public function v2TimoutSetsAtClientLevel()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder(self::PROJECT_KEY, $client);
        $request = $apiRequestBuilder->withProjectKey(self::PROJECT_KEY)->get();
        $response = $request->execute();

        return $response;
    }
}
