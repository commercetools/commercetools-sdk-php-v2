<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|ShoppingList
     */
    public function getObj();

    /**
     * @param ?ShoppingList $obj
     */
    public function setObj(?ShoppingList $obj): void;
}
