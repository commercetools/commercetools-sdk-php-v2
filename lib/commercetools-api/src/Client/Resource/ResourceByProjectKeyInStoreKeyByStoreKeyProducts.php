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
class ResourceByProjectKeyInStoreKeyByStoreKeyProducts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/products', $args, $client);
    }

    /**
     */
    public function withProductId(?string $productID = null): ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductID
    {
        $args = $this->getArgs();
        if (!is_null($productID)) {
            $args['productID'] = $productID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductID($args, $this->getClient());
    }
    /**
     */
    public function withProductKey(?string $productKey = null): ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKey
    {
        $args = $this->getArgs();
        if (!is_null($productKey)) {
            $args['productKey'] = $productKey;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKey($args, $this->getClient());
    }
}
