<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListChangeTextLineItemsOrderActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListChangeTextLineItemsOrderAction
     */
    public function at($index);

    /**
     * @return ShoppingListChangeTextLineItemsOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListChangeTextLineItemsOrderAction
     */
    public function map($data, $index);
}
