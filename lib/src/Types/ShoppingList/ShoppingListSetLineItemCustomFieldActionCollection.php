<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetLineItemCustomFieldActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListSetLineItemCustomFieldAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetLineItemCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetLineItemCustomFieldAction
     */
    public function map($data, $index);
}
