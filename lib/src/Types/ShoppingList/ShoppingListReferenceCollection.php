<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\ReferenceCollection;


interface ShoppingListReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return ShoppingListReference
     */
    public function at($index);

    /**
     * @return ShoppingListReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListReference
     */
    public function map($data, $index);
}
