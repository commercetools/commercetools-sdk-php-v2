<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface OrderStateChangedMessagePayload extends MessagePayload
{
    
    const FIELD_ORDER_STATE = 'orderState';
    const FIELD_OLD_ORDER_STATE = 'oldOrderState';

    /**
     *
     * @return string|null
     */
    public function getOrderState();
    
    /**
     *
     * @return string|null
     */
    public function getOldOrderState();
    public function setOrderState(?string $orderState): void;
    
    public function setOldOrderState(?string $oldOrderState): void;
}