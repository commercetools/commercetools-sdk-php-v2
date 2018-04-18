<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierCollection;


interface CartScoreTierCollection extends ShippingRatePriceTierCollection {
    /**
     * @param $index
     * @return CartScoreTier
     */
    public function at($index);

    /**
     * @return CartScoreTier
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartScoreTier
     */
    public function map($data, $index);
}
