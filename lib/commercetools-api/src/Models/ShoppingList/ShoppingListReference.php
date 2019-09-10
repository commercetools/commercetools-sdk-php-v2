<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface ShoppingListReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return ShoppingList|null
     */
    public function getObj();
    public function setObj(?ShoppingList $obj): void;
}