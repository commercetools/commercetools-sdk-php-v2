<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Client;
use Commercetools\Core\Config as ConfigV1;

class Configuration extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = Client::ofConfig(
            ConfigV1::of()->setClientId(self::CLIENT_ID)->setClientSecret(self::CLIENT_SECRET)->setProject(self::PROJECT_KEY)
        );

        $request = RequestBuilder::of()->project()->get();
        $response = $client->execute($request);

        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET), [], $oauthUrl = 'https://auth.us-central1.gcp.commercetools.com');
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3], $apiUrl = 'https://api.us-central1.gcp.commercetools.com'), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey(self::PROJECT_KEY)->get();

        return $request->execute();
    }
}
