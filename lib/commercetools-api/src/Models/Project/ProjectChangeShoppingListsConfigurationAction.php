<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeShoppingListsConfigurationAction extends ProjectUpdateAction
{
    public const FIELD_SHOPPING_LISTS_CONFIGURATION = 'shoppingListsConfiguration';

    /**
     * <p>Configuration for the <a href="/../api/projects/shoppingLists">Shopping Lists</a> feature.</p>
     *

     * @return null|ShoppingListsConfiguration
     */
    public function getShoppingListsConfiguration();

    /**
     * @param ?ShoppingListsConfiguration $shoppingListsConfiguration
     */
    public function setShoppingListsConfiguration(?ShoppingListsConfiguration $shoppingListsConfiguration): void;
}
