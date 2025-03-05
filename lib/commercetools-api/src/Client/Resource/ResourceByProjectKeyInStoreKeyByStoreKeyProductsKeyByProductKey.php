<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/products/key={productKey}', $args, $client);
    }

    /**
     */
    public function productTailoring(): ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoring
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoring($args, $this->getClient());
    }
}
