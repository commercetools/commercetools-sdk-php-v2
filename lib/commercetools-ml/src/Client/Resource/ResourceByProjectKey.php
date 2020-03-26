<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}', $args, $client);
    }

    public function imageSearch(): ResourceByProjectKeyImageSearch
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImageSearch($args, $this->getClient());
    }
    public function recommendations(): ResourceByProjectKeyRecommendations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyRecommendations($args, $this->getClient());
    }
    public function missingData(): ResourceByProjectKeyMissingData
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingData($args, $this->getClient());
    }
    public function similarities(): ResourceByProjectKeySimilarities
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeySimilarities($args, $this->getClient());
    }
}
