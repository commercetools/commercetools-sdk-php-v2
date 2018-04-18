<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateActionCollection;


interface ShippingMethodUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodUpdateAction
     */
    public function at($index);

    /**
     * @return ShippingMethodUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodUpdateAction
     */
    public function map($data, $index);
}
