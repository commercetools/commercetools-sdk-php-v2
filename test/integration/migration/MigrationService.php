<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config as ConfigV2;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Core\Client;
use Commercetools\Core\Config;
use Commercetools\Core\Helper\Uuid;
use Commercetools\Core\Request\ClientRequestInterface;
use Commercetools\Core\Response\ApiResponseInterface;
use GuzzleHttp\Exception\GuzzleException;

abstract class MigrationService
{
    const OAUTH_URL = 'https://auth.europe-west1.gcp.commercetools.com';
    const API_URL = 'https://api.europe-west1.gcp.commercetools.com';
    const CLIENT_ID = 'my_client_id';
    const CLIENT_SECRET = 'my_client_secret';
    const PROJECT_KEY = 'my_project_key';

    public function clientV1(): Client\ApiClient
    {
        $config = Config::fromArray([
            'client_id' => self::CLIENT_ID,
            'client_secret' => self::CLIENT_SECRET,
            'project' => self::PROJECT_KEY
        ]);

        $config->setOauthUrl(self::OAUTH_URL)->setApiUrl(self::API_URL);

        return Client\ClientFactory::of()->createClient($config);
    }

    public function uniqueString(): string
    {
        return 'test-' . Uuid::uuidv4();
    }

    /**
     * @throws GuzzleException
     */
    public function executeV1(Client\ApiClient $client, ClientRequestInterface $request): ApiResponseInterface
    {
        return $client->execute($request);
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function builderV2(): ApiRequestBuilder
    {
        $authConfig = new ClientCredentialsConfig(new ClientCredentials(self::CLIENT_ID, self::CLIENT_SECRET));

        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3]), $authConfig);

        return new ApiRequestBuilder(self::PROJECT_KEY, $client);
    }
}
