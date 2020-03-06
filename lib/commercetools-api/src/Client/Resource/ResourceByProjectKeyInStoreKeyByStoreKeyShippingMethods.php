<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods extends ApiResource
{
    public function matchingCart(): ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethodsMatchingCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethodsMatchingCart($this->getUri() . '/matching-cart', $args, $this->getClient());
    }
}
