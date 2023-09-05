<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomLineItemQuantityChangedMessagePayload extends OrderMessagePayload
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_CUSTOM_LINE_ITEM_KEY = 'customLineItemKey';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_OLD_QUANTITY = 'oldQuantity';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey();

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> quantity after the <a href="ctp:api:type:StagedOrderChangeCustomLineItemQuantityAction">Change Custom Line Item Quantity</a> update action.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> quantity before the <a href="ctp:api:type:StagedOrderChangeCustomLineItemQuantityAction">Change Custom Line Item Quantity</a> update action.</p>
     *

     * @return null|int
     */
    public function getOldQuantity();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $customLineItemKey
     */
    public function setCustomLineItemKey(?string $customLineItemKey): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?int $oldQuantity
     */
    public function setOldQuantity(?int $oldQuantity): void;
}
