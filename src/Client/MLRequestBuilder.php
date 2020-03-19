<?php

namespace Commercetools\Client;

use Commercetools\Ml\Client\MlRequestBuilder as Builder;
use Commercetools\Ml\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;

class MLRequestBuilder extends Builder
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
        return $this->withProjectKey($this->projectKey);
    }
}
