<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListChangeNameActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListChangeNameAction
     */
    public function at($index);

    /**
     * @return ShoppingListChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListChangeNameAction
     */
    public function map($data, $index);
}
