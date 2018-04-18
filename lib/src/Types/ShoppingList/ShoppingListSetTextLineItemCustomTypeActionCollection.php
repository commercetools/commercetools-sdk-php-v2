<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetTextLineItemCustomTypeActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListSetTextLineItemCustomTypeAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetTextLineItemCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetTextLineItemCustomTypeAction
     */
    public function map($data, $index);
}
