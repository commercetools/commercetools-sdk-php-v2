<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\Reference;

interface ShoppingListReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|ShoppingList
     */
    public function getObj();

    public function setObj(?ShoppingList $obj): void;
}
