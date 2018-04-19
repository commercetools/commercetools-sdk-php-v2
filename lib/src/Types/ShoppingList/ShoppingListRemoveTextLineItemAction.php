<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

interface ShoppingListRemoveTextLineItemAction extends ShoppingListUpdateAction
{
    const FIELD_QUANTITY = 'quantity';
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return string
     */
    public function getTextLineItemId();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId);

}
