<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodRemoveZoneActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodRemoveZoneAction
     */
    public function at($index);

    /**
     * @return ShippingMethodRemoveZoneAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodRemoveZoneAction
     */
    public function map($data, $index);
}
