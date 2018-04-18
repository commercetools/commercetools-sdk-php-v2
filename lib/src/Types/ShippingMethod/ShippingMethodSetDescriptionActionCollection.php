<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodSetDescriptionActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodSetDescriptionAction
     */
    public function at($index);

    /**
     * @return ShippingMethodSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodSetDescriptionAction
     */
    public function map($data, $index);
}
