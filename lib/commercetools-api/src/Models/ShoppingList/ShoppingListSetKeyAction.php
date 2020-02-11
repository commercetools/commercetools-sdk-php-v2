<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ShoppingListSetKeyAction extends ShoppingListUpdateAction
{

    public const FIELD_KEY = 'key';

    /**
     * <p>User-specific unique identifier for the shopping list.</p>
     *
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
