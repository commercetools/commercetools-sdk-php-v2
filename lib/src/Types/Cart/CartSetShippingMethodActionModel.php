<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\ShippingMethod\ShippingMethodReference;

class CartSetShippingMethodActionModel extends CartUpdateActionModel implements CartSetShippingMethodAction {
    const DISCRIMINATOR_VALUE = 'setShippingMethod';

    /**
     * @var ShippingMethodReference
     */
    protected $shippingMethod;

    /**
     * @return ShippingMethodReference
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            $value = $this->raw(CartSetShippingMethodAction::FIELD_SHIPPING_METHOD);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodReference::class, null);
            }
            $value = $this->mapData(ShippingMethodReference::class, $value);

            $this->shippingMethod = $value;
        }
        return $this->shippingMethod;
    }

    /**
     * @param ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function setShippingMethod(ShippingMethodReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

}
