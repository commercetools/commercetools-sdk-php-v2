<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetShippingRateInputAction extends CartUpdateAction
{
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';

    /**
     * @return ShippingRateInputDraft
     */
    public function getShippingRateInput();

    /**
     * @param ShippingRateInputDraft $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInputDraft $shippingRateInput);

}
