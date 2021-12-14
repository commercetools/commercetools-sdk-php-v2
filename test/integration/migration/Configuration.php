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


class Configuration implements MigrationInterface
{
    public const OAUTH_URL = 'https://auth.europe-west1.gcp.commercetools.com';
    public const API_URL = 'https://api.europe-west1.gcp.commercetools.com';

    /**
     * @throws \Commercetools\Core\Error\ApiException
     */
    public function v1()
    {
        $config = ConfigV1::fromArray([
            'client_id' => 'my_client_id',
            'client_secret' => 'my_client_secret',
            'project' => 'my_project_id'
        ]);

        $config->setOauthUrl(self::OAUTH_URL)->setApiUrl(self::API_URL);
        $client = Client::ofConfig($config);
        $request = RequestBuilder::of()->project()->get();
        $response = $client->execute($request);

        return $response;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $clientId = 'my_client_id';
        $clientSecret = 'my_client_secret';
        $projectKey = 'my_project_key';

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($projectKey)->get();

        return $request->execute();
    }
}
