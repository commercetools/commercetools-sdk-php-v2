<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperMap;

/**
 * @internal
 */
final class ProductVariantChannelAvailabilityMapModel extends MapperMap implements ProductVariantChannelAvailabilityMap
{
    /**
     * @psalm-return callable(string):?mixed
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?mixed
             */
            function (string $key) {
                return $this->get($key);
            };
    }
}
