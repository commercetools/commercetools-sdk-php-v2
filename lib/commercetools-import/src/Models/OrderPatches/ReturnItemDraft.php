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
     * <p>Number of Line Items or Custom Line Items to return.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to return.</p>
     * <p>Required if Line Items are returned, to create a <a href="ctp:api:type:LineItemReturnItem">LineItemReturnItem</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to return.</p>
     * <p>Required if Custom Line Items are returned, to create a <a href="ctp:api:type:CustomLineItemReturnItem">CustomLineItemReturnItem</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p>User-defined description for the return.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * <p>Shipment status of the item to be returned.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

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
