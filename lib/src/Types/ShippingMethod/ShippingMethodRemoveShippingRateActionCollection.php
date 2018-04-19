<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodRemoveShippingRateActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @param $index
     * @return ShippingMethodRemoveShippingRateAction
     */
    public function at($index);

    /**
     * @return ShippingMethodRemoveShippingRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodRemoveShippingRateAction
     */
    public function map($data, $index);
}
