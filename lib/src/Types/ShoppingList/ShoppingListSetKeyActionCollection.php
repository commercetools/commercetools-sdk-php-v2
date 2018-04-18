<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetKeyActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListSetKeyAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetKeyAction
     */
    public function map($data, $index);
}
