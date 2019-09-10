<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderRemoveDeliveryAction extends OrderUpdateAction
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    public function setDeliveryId(?string $deliveryId): void;
}