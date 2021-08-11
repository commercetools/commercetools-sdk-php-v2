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
class ResourceByProjectKeyRecommendationsProjectCategories extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/recommendations/project-categories', $args, $client);
    }

    /**
     */
    public function withProductId(string $productId = null): ResourceByProjectKeyRecommendationsProjectCategoriesByProductId
    {
        $args = $this->getArgs();
        if (!is_null($productId)) {
            $args['productId'] = $productId;
        }

        return new ResourceByProjectKeyRecommendationsProjectCategoriesByProductId($args, $this->getClient());
    }
}
