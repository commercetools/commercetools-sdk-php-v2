<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListRemoveLineItemActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListRemoveLineItemAction
     */
    public function at($index);

    /**
     * @return ShoppingListRemoveLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListRemoveLineItemAction
     */
    public function map($data, $index);
}
