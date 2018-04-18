<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetCustomTypeActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetCustomTypeAction
     */
    public function map($data, $index);
}
