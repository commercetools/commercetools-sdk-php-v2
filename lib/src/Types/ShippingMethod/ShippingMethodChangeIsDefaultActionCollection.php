<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodChangeIsDefaultActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodChangeIsDefaultAction
     */
    public function at($index);

    /**
     * @return ShippingMethodChangeIsDefaultAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodChangeIsDefaultAction
     */
    public function map($data, $index);
}
