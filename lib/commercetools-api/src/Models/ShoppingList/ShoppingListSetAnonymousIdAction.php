<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListSetAnonymousIdAction extends ShoppingListUpdateAction
{
    public const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;
}
