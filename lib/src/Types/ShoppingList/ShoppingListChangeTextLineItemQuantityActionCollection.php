<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListChangeTextLineItemQuantityActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListChangeTextLineItemQuantityAction
     */
    public function at($index);

    /**
     * @return ShoppingListChangeTextLineItemQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListChangeTextLineItemQuantityAction
     */
    public function map($data, $index);
}
