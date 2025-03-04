<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use File;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImages extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/products/key={productKey}/product-tailoring/images', $args, $client);
    }

    /**
     * @psalm-param ?UploadedFileInterface  $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?UploadedFileInterface  $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost($args['projectKey'], $args['storeKey'], $args['productKey'], $body, $headers, $this->getClient());
    }
}
