<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListRemoveTextLineItemActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListRemoveTextLineItemAction
     */
    public function at($index);

    /**
     * @return ShoppingListRemoveTextLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListRemoveTextLineItemAction
     */
    public function map($data, $index);
}
