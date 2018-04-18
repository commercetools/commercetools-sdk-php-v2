<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierCollection;


interface CartValueTierCollection extends ShippingRatePriceTierCollection {
    /**
     * @param $index
     * @return CartValueTier
     */
    public function at($index);

    /**
     * @return CartValueTier
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartValueTier
     */
    public function map($data, $index);
}
