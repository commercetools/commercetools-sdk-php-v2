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

     * @return null|string
     */
    public function getReturnItemId();

    /**

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
