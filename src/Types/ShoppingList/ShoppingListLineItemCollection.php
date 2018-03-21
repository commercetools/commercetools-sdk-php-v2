<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\Collection;

interface ShoppingListLineItemCollection extends Collection {
    /**
     * @param $index
     * @return ShoppingListLineItem
     */
    public function at($index);

    /**
     * @return ShoppingListLineItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListLineItem
     */
    public function map($data, $index);
}
