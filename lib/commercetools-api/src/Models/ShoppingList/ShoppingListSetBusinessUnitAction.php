<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListSetBusinessUnitAction extends ShoppingListUpdateAction
{
    public const FIELD_BUSINESS_UNIT = 'businessUnit';

    /**
     * <p>The Business Unit to assign to the Shopping List, which must have access to the <a href="/../api/projects/stores">Store</a> that is set on the Shopping List.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;
}
