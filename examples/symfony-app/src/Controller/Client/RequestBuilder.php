<?php

namespace App\Controller\Client;

use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use GuzzleHttp\ClientInterface;

class RequestBuilder
{
    private string $projectKey;
    private ClientInterface $client;

    public function __construct()
    {
        $clientId = $_ENV['APP_CTP_CLIENT_ID'];
        $clientSecret = $_ENV['APP_CTP_CLIENT_SECRET'];
        $this->projectKey = $_ENV['APP_CTP_PROJECT_KEY'];

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));
        $this->client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3]), $authConfig);

    }

    public function getApiRequestBuilder()
    {
        return new ApiRequestBuilder($this->projectKey, $this->client);
    }
}
