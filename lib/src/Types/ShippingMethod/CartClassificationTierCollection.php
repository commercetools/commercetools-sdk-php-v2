<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierCollection;


interface CartClassificationTierCollection extends ShippingRatePriceTierCollection {
    /**
     * @param $index
     * @return CartClassificationTier
     */
    public function at($index);

    /**
     * @return CartClassificationTier
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartClassificationTier
     */
    public function map($data, $index);
}
