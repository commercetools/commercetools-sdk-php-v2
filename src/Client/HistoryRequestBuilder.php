<?php

namespace Commercetools\Client;

use Commercetools\History\Client\HistoryRequestBuilder as Builder;
use Commercetools\History\Client\Resource\ResourceByProjectKey;
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

    public function with(): ResourceByProjectKey
    {
        return $this->withProjectKeyValue($this->projectKey);
    }
}
