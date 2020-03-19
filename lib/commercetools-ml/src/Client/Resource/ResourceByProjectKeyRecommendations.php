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
class ResourceByProjectKeyRecommendations extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/recommendations', $args, $client);
    }

    public function projectCategories(): ResourceByProjectKeyRecommendationsProjectCategories
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyRecommendationsProjectCategories($args, $this->getClient());
    }
    public function generalCategories(): ResourceByProjectKeyRecommendationsGeneralCategories
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyRecommendationsGeneralCategories($args, $this->getClient());
    }

}
