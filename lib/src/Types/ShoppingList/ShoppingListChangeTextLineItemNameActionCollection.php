<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListChangeTextLineItemNameActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListChangeTextLineItemNameAction
     */
    public function at($index);

    /**
     * @return ShoppingListChangeTextLineItemNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListChangeTextLineItemNameAction
     */
    public function map($data, $index);
}
