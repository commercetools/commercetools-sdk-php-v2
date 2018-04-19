<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodChangeNameActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @param $index
     * @return ShippingMethodChangeNameAction
     */
    public function at($index);

    /**
     * @return ShippingMethodChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodChangeNameAction
     */
    public function map($data, $index);
}
