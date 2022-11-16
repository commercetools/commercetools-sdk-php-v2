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

interface ShoppingListChangeNameAction extends ShoppingListUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
