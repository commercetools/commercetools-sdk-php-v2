<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetShippingRateInputActionModel extends CartUpdateActionModel implements CartSetShippingRateInputAction {
    const DISCRIMINATOR_VALUE = 'setShippingRateInput';

    /**
     * @var ShippingRateInputDraft
     */
    protected $shippingRateInput;

    /**
     * @return ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            $value = $this->raw(CartSetShippingRateInputAction::FIELD_SHIPPING_RATE_INPUT);
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInputDraft::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->shippingRateInput = $value;
        }
        return $this->shippingRateInput;
    }

    /**
     * @param ShippingRateInputDraft $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

}
