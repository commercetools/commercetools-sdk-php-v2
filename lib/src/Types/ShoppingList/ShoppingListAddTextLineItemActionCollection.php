<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListAddTextLineItemActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListAddTextLineItemAction
     */
    public function at($index);

    /**
     * @return ShoppingListAddTextLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListAddTextLineItemAction
     */
    public function map($data, $index);
}
