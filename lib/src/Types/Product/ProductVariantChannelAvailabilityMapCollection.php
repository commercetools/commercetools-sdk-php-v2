<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductVariantChannelAvailabilityMapCollection extends Collection {
    /**
     * @param $index
     * @return ProductVariantChannelAvailabilityMap
     */
    public function at($index);

    /**
     * @return ProductVariantChannelAvailabilityMap
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariantChannelAvailabilityMap
     */
    public function map($data, $index);
}
