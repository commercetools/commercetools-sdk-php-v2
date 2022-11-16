<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListChangeLineItemsOrderAction extends MyShoppingListUpdateAction
{
    public const FIELD_LINE_ITEM_ORDER = 'lineItemOrder';

    /**
     * <p>All existing <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> <code>id</code>s of the <a href="ctp:api:type:ShoppingList">ShoppingList</a> in the desired new order.</p>
     *

     * @return null|array
     */
    public function getLineItemOrder();

    /**
     * @param ?array $lineItemOrder
     */
    public function setLineItemOrder(?array $lineItemOrder): void;
}
