<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderChangeShipmentStateAction extends OrderUpdateAction
{
    
    const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     *
     * @return string|null
     */
    public function getShipmentState();
    public function setShipmentState(?string $shipmentState): void;
}