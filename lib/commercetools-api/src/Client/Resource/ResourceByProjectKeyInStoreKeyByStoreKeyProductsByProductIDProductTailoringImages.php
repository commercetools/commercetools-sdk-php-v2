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
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImages extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/products/{productID}/product-tailoring/images', $args, $client);
    }

    /**
     * @psalm-param ?UploadedFileInterface  $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?UploadedFileInterface  $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost($args['projectKey'], $args['storeKey'], $args['productID'], $body, $headers, $this->getClient());
    }
}
