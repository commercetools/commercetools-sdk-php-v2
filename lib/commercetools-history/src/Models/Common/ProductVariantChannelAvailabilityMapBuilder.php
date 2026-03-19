<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use stdClass;
use Commercetools\Base\MapperMap;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariantChannelAvailabilityMap>
 * @extends MapperMap<ProductVariantChannelAvailabilityMap>
 */
final class ProductVariantChannelAvailabilityMapBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?ProductVariantChannelAvailabilityMap
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?ProductVariantChannelAvailabilityMap
             */
            function(string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = ProductVariantChannelAvailabilityMapModel::of($data);
                }
                return $data;
            };
    }

    /**
     * @return ProductVariantChannelAvailabilityMap
     */
    public function build()
    {
        return new ProductVariantChannelAvailabilityMapModel($this->toArray());
    }
}
