<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderShipmentStateChangedMessage extends OrderMessage
{
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_OLD_SHIPMENT_STATE = 'oldShipmentState';

    /**
     * <p><a href="ctp:api:type:ShipmentState">ShipmentState</a> after the <a href="ctp:api:type:OrderChangeShipmentStateAction">Change Shipment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p><a href="ctp:api:type:ShipmentState">ShipmentState</a> before the <a href="ctp:api:type:OrderChangeShipmentStateAction">Change Shipment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldShipmentState();

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $oldShipmentState
     */
    public function setOldShipmentState(?string $oldShipmentState): void;
}
