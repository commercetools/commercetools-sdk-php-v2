<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\ProductTailoringUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoring extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/products/{productID}/product-tailoring', $args, $client);
    }

    /**
     */
    public function images(): ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImages
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImages($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet($args['projectKey'], $args['storeKey'], $args['productID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductTailoringUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTailoringUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost($args['projectKey'], $args['storeKey'], $args['productID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete($args['projectKey'], $args['storeKey'], $args['productID'], $body, $headers, $this->getClient());
    }
}
