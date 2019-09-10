<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface OrderShipmentStateChangedMessagePayload extends MessagePayload
{
    
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_OLD_SHIPMENT_STATE = 'oldShipmentState';

    /**
     *
     * @return string|null
     */
    public function getShipmentState();
    
    /**
     *
     * @return string|null
     */
    public function getOldShipmentState();
    public function setShipmentState(?string $shipmentState): void;
    
    public function setOldShipmentState(?string $oldShipmentState): void;
}