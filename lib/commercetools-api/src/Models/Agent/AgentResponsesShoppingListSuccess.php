<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesShoppingListSuccess extends AgentResponsesSuccess
{
    public const FIELD_ENTITY = 'entity';

    /**
     * <p>The created <a href="ctp:api:type:ShoppingList">ShoppingList</a> in full commercetools REST representation.</p>
     *

     * @return null|ShoppingList
     */
    public function getEntity();

    /**
     * @param ?ShoppingList $entity
     */
    public function setEntity(?ShoppingList $entity): void;
}
