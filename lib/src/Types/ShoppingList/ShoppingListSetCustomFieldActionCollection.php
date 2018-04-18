<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetCustomFieldActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetCustomFieldAction
     */
    public function map($data, $index);
}
