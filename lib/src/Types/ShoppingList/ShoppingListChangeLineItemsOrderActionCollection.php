<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListChangeLineItemsOrderActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListChangeLineItemsOrderAction
     */
    public function at($index);

    /**
     * @return ShoppingListChangeLineItemsOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListChangeLineItemsOrderAction
     */
    public function map($data, $index);
}
