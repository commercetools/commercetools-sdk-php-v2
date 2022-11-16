<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListSetSlugAction extends ShoppingListUpdateAction
{
    public const FIELD_SLUG = 'slug';

    /**
     * <p>Value to set. If empty, any existing value will be removed. Each slug is unique across a Project, but a ShoppingList can have the same slug for different languages. Must match the pattern <code>^[A-Za-z0-9_-]{2,256}+$</code></p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;
}
