<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListRemoveTextLineItemAction extends MyShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_TEXT_LINE_ITEM_KEY = 'textLineItemKey';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemKey();

    /**
     * <p>Amount to remove from the <code>quantity</code> of the TextLineItem. If not set, the TextLineItem is removed from the ShoppingList. If this value matches or exceeds the current <code>quantity</code> of the TextLineItem, the TextLineItem is removed from the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?string $textLineItemKey
     */
    public function setTextLineItemKey(?string $textLineItemKey): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
