<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\Collection;

interface ShoppingListCollection extends Collection {
    /**
     * @param $index
     * @return ShoppingList
     */
    public function at($index);

    /**
     * @return ShoppingList
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingList
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
