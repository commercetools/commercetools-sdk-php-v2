<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodAddZoneActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodAddZoneAction
     */
    public function at($index);

    /**
     * @return ShippingMethodAddZoneAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodAddZoneAction
     */
    public function map($data, $index);
}
