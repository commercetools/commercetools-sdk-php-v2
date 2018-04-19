<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListAddLineItemActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListAddLineItemAction
     */
    public function at($index);

    /**
     * @return ShoppingListAddLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListAddLineItemAction
     */
    public function map($data, $index);
}
