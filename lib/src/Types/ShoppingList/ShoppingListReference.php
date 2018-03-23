<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\Reference;

interface ShoppingListReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return ShoppingList
     */
    public function getObj();

    /**
     * @param ShoppingList $obj
     * @return $this
     */
    public function setObj(ShoppingList $obj);

}
