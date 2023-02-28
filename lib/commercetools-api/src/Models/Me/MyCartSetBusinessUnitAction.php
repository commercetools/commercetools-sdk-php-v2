<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartSetBusinessUnitAction extends MyCartUpdateAction
{
    public const FIELD_BUSINESS_UNIT = 'businessUnit';

    /**
     * <p>New Business Unit to assign to the Cart, which must have access to the <a href="/../api/projects/stores">Store</a> that is set on the Cart.
     * Additionally, the authenticated user must have <a href="/projects/business-units#associate">Buyer</a> access to the <a href="/projects/business-units#businessunit">Business Unit</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;
}
