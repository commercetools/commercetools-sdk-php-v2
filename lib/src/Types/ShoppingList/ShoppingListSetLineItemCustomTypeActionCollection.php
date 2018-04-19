<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetLineItemCustomTypeActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListSetLineItemCustomTypeAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetLineItemCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetLineItemCustomTypeAction
     */
    public function map($data, $index);
}
