<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductVariantAvailabilityCollection extends Collection
{
    /**
     * @param $index
     * @return ProductVariantAvailability
     */
    public function at($index);

    /**
     * @return ProductVariantAvailability
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariantAvailability
     */
    public function map($data, $index);
}
