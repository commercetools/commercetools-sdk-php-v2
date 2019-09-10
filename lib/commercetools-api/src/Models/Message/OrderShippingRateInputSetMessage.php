<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingRateInput;

interface OrderShippingRateInputSetMessage extends Message
{
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    const FIELD_OLD_SHIPPING_RATE_INPUT = 'oldShippingRateInput';

    /**
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * @return null|ShippingRateInput
     */
    public function getOldShippingRateInput();

    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    public function setOldShippingRateInput(?ShippingRateInput $oldShippingRateInput): void;
}
