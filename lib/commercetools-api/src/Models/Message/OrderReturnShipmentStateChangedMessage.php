<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderReturnShipmentStateChangedMessage extends Message
{
    public const FIELD_RETURN_ITEM_ID = 'returnItemId';
    public const FIELD_RETURN_SHIPMENT_STATE = 'returnShipmentState';

    /**
     * @return null|string
     */
    public function getReturnItemId();

    /**
     * @return null|string
     */
    public function getReturnShipmentState();

    public function setReturnItemId(?string $returnItemId): void;

    public function setReturnShipmentState(?string $returnShipmentState): void;
}
