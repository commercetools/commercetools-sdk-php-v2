<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

interface ShoppingListRemoveTextLineItemAction extends ShoppingListUpdateAction
{
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * @return null|int
     */
    public function getQuantity();

    public function setTextLineItemId(?string $textLineItemId): void;

    public function setQuantity(?int $quantity): void;
}
