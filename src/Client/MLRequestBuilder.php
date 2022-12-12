<?php

namespace Commercetools\Client;

use Commercetools\Ml\Client\MlRequestBuilder as Builder;
use Commercetools\Ml\Client\Resource\ResourceByProjectKey;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyImageSearch;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingData;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendations;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeySimilarities;
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

    public function imageSearch(): ResourceByProjectKeyImageSearch
    {
        return $this->with()->imageSearch();
    }

    public function recommendations(): ResourceByProjectKeyRecommendations
    {
        return $this->with()->recommendations();
    }

    public function similarities(): ResourceByProjectKeySimilarities
    {
        return $this->with()->similarities();
    }
}
