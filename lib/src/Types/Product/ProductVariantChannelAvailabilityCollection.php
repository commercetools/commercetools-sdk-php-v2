<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductVariantChannelAvailabilityCollection extends Collection
{
    /**
     * @param $index
     * @return ProductVariantChannelAvailability
     */
    public function at($index);

    /**
     * @return ProductVariantChannelAvailability
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariantChannelAvailability
     */
    public function map($data, $index);
}
