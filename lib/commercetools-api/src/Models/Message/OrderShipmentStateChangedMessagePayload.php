<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

interface OrderShipmentStateChangedMessagePayload extends MessagePayload
{
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_OLD_SHIPMENT_STATE = 'oldShipmentState';

    /**
     * @return null|string
     */
    public function getShipmentState();

    /**
     * @return null|string
     */
    public function getOldShipmentState();

    public function setShipmentState(?string $shipmentState): void;

    public function setOldShipmentState(?string $oldShipmentState): void;
}
