<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetCustomerActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListSetCustomerAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetCustomerAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetCustomerAction
     */
    public function map($data, $index);
}
