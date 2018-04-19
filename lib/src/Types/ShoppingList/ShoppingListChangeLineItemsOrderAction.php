<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

interface ShoppingListChangeLineItemsOrderAction extends ShoppingListUpdateAction
{
    const FIELD_LINE_ITEM_ORDER = 'lineItemOrder';

    /**
     * @return array
     */
    public function getLineItemOrder();

    /**
     * @param array $lineItemOrder
     * @return $this
     */
    public function setLineItemOrder($lineItemOrder);

}
