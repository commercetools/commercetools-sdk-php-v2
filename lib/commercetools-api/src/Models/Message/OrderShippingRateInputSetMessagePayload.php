<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ShippingRateInput;

interface OrderShippingRateInputSetMessagePayload extends MessagePayload
{
    
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    const FIELD_OLD_SHIPPING_RATE_INPUT = 'oldShippingRateInput';

    /**
     *
     * @return ShippingRateInput|null
     */
    public function getShippingRateInput();
    
    /**
     *
     * @return ShippingRateInput|null
     */
    public function getOldShippingRateInput();
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;
    
    public function setOldShippingRateInput(?ShippingRateInput $oldShippingRateInput): void;
}