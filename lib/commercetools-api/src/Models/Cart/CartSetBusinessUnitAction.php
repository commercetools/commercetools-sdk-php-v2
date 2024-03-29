<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetBusinessUnitAction extends CartUpdateAction
{
    public const FIELD_BUSINESS_UNIT = 'businessUnit';

    /**
     * <p>New Business Unit to assign to the Cart, which must have access to the <a href="/../api/projects/stores">Store</a> that is set on the Cart.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;
}
