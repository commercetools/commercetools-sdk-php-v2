<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

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

     * @return null|float
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
     * <p>Maps to <code>ReturnItem.shipmentState</code></p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;
}
