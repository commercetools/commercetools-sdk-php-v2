<?php

namespace App\Client;

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
        $apiUri = $_ENV['APP_CTP_API_URI'] ?? Config::API_URI;
        $authUri = $_ENV['APP_CTP_AUTH_URI'] ?? ClientCredentialsConfig::AUTH_URI;

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret), [], $authUri);
        $this->client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3], $apiUri), $authConfig);

    }

    public function getApiRequestBuilder()
    {
        return new ApiRequestBuilder($this->projectKey, $this->client);
    }
}
