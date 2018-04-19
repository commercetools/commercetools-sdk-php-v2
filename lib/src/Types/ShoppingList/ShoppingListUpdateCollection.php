<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\UpdateCollection;


interface ShoppingListUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return ShoppingListUpdate
     */
    public function at($index);

    /**
     * @return ShoppingListUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListUpdate
     */
    public function map($data, $index);
}
