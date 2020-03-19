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
use Commercetools\Ml\Models\SimilarProducts\SimilarProductSearchRequest;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeySimilaritiesProducts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/similarities/products', $args, $client);
    }

    public function status(): ResourceByProjectKeySimilaritiesProductsStatus
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeySimilaritiesProductsStatus($args, $this->getClient());
    }

    /**
     * @psalm-param ?SimilarProductSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?SimilarProductSearchRequest $body = null, array $headers = []): ByProjectKeySimilaritiesProductsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeySimilaritiesProductsPost($args['projectKey'], $body, $headers, $this->getClient());
    }

}
