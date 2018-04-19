<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\ShippingMethod\ShippingMethodReference;

interface CartSetShippingMethodAction extends CartUpdateAction
{
    const FIELD_SHIPPING_METHOD = 'shippingMethod';

    /**
     * @return ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * @param ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function setShippingMethod(ShippingMethodReference $shippingMethod);

}
