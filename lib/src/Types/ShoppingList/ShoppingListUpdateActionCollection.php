<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\UpdateActionCollection;


interface ShoppingListUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListUpdateAction
     */
    public function at($index);

    /**
     * @return ShoppingListUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListUpdateAction
     */
    public function map($data, $index);
}
