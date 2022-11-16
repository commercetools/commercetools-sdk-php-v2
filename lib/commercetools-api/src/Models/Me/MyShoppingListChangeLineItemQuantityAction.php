<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListChangeLineItemQuantityAction extends MyShoppingListUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>New value to set. If <code>0</code>, the ShoppingListLineItem is removed from the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
