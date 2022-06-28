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
     * <p>Contains the representation of the expanded ShoppingList. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ShoppingLists.</p>
     *
     * @return null|ShoppingList
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?ShoppingList $obj
     */
    public function setObj(?ShoppingList $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
