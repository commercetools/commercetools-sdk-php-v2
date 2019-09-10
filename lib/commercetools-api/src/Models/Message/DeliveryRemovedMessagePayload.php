<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\Delivery;

interface DeliveryRemovedMessagePayload extends MessagePayload
{
    
    const FIELD_DELIVERY = 'delivery';

    /**
     *
     * @return Delivery|null
     */
    public function getDelivery();
    public function setDelivery(?Delivery $delivery): void;
}