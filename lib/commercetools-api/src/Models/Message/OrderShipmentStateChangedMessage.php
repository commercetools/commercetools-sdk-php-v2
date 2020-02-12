<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderShipmentStateChangedMessage extends Message
{
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_OLD_SHIPMENT_STATE = 'oldShipmentState';

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
