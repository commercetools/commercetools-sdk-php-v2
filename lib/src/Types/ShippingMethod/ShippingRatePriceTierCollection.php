<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ShippingRatePriceTierCollection extends Collection
{
    /**
     * @param $index
     * @return ShippingRatePriceTier
     */
    public function at($index);

    /**
     * @return ShippingRatePriceTier
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingRatePriceTier
     */
    public function map($data, $index);
}
