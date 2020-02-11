<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReturnItemDraft extends JsonObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|string
     */
    public function getComment();

    /**
     * @return null|string
     */
    public function getShipmentState();

    public function setQuantity(?int $quantity): void;

    public function setLineItemId(?string $lineItemId): void;

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setComment(?string $comment): void;

    public function setShipmentState(?string $shipmentState): void;
}
