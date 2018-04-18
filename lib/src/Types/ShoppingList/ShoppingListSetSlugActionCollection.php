<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetSlugActionCollection extends ShoppingListUpdateActionCollection {
    /**
     * @param $index
     * @return ShoppingListSetSlugAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetSlugAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetSlugAction
     */
    public function map($data, $index);
}
