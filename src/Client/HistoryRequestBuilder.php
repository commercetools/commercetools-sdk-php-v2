<?php

namespace Commercetools\Client;

use Commercetools\History\Client\HistoryRequestBuilder as Builder;
use Commercetools\History\Client\Resource;
use GuzzleHttp\ClientInterface;

class HistoryRequestBuilder extends Builder
{
    /**
     * @var string
     */
    private $projectKey;

    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(string $projectKey, ClientInterface $client, array $args = [])
    {
        parent::__construct($client, $args);
        $this->projectKey = $projectKey;
    }

    public function with(): Resource\ResourceByProjectKey
    {
        return $this->withProjectKeyValue($this->projectKey);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): Resource\ByProjectKeyGet
    {
        return $this->with()->get($body, $headers);
    }

    public function resourceType(string $resourceType): Resource\ResourceByProjectKeyByResourceType
    {
        return $this->with()->withResourceTypeValue($resourceType);
    }
}
