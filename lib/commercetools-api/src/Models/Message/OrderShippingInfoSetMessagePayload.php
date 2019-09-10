<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ShippingInfo;

interface OrderShippingInfoSetMessagePayload extends MessagePayload
{
    
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_OLD_SHIPPING_INFO = 'oldShippingInfo';

    /**
     *
     * @return ShippingInfo|null
     */
    public function getShippingInfo();
    
    /**
     *
     * @return ShippingInfo|null
     */
    public function getOldShippingInfo();
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;
    
    public function setOldShippingInfo(?ShippingInfo $oldShippingInfo): void;
}