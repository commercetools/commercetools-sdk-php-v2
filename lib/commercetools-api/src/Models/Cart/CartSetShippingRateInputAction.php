<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetShippingRateInputAction extends CartUpdateAction
{
    
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';

    /**
     *
     * @return ShippingRateInputDraft|null
     */
    public function getShippingRateInput();
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;
}