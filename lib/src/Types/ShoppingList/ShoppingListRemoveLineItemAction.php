<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

interface ShoppingListRemoveLineItemAction extends ShoppingListUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

}
