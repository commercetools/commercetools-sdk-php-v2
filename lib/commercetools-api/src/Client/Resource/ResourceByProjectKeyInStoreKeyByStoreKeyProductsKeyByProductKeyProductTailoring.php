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
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoring extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/products/key={productKey}/product-tailoring', $args, $client);
    }

    /**
     */
    public function images(): ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImages
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImages($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet($args['projectKey'], $args['storeKey'], $args['productKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductTailoringUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTailoringUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost($args['projectKey'], $args['storeKey'], $args['productKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete($args['projectKey'], $args['storeKey'], $args['productKey'], $body, $headers, $this->getClient());
    }
}
