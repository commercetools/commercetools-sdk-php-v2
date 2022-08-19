<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderReturnShipmentStateChangedMessagePayload extends OrderMessagePayload
{
    public const FIELD_RETURN_ITEM_ID = 'returnItemId';
    public const FIELD_RETURN_SHIPMENT_STATE = 'returnShipmentState';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ReturnItem">ReturnItem</a>.</p>
     *

     * @return null|string
     */
    public function getReturnItemId();

    /**
     * <p>State of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> after the <a href="ctp:api:type:OrderSetReturnShipmentStateAction">Set Return Shipment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getReturnShipmentState();

    /**
     * @param ?string $returnItemId
     */
    public function setReturnItemId(?string $returnItemId): void;

    /**
     * @param ?string $returnShipmentState
     */
    public function setReturnShipmentState(?string $returnShipmentState): void;
}
