<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodSetKeyActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodSetKeyAction
     */
    public function at($index);

    /**
     * @return ShippingMethodSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodSetKeyAction
     */
    public function map($data, $index);
}
