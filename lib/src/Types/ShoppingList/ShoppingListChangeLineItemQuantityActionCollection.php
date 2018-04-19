<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListChangeLineItemQuantityActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListChangeLineItemQuantityAction
     */
    public function at($index);

    /**
     * @return ShoppingListChangeLineItemQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListChangeLineItemQuantityAction
     */
    public function map($data, $index);
}
