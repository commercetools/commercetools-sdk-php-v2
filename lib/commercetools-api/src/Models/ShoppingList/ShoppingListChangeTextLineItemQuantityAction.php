<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListChangeTextLineItemQuantityAction extends ShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p>New value to set. If <code>0</code>, the TextLineItem is removed from the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
