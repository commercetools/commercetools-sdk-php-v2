<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeAssociateAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeNameAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeParentUnitAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitSetDefaultBillingAddressAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitSetDefaultShippingAddressAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitUpdateAction extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'action';
    public const FIELD_ACTION = 'action';

    /**

     * @return null|string
     */
    public function getAction();
}
