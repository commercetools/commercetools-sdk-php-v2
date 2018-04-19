<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\ResourceCollection;


interface ShoppingListCollection extends ResourceCollection
{
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
     * @param string $id
     * @return ShoppingList
     */
    public function byId($id);

}
