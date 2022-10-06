<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeAssociateAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeAssociateActionBuilder;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeNameAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeNameActionBuilder;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeParentUnitAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitChangeParentUnitActionBuilder;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitSetDefaultBillingAddressAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitSetDefaultBillingAddressActionBuilder;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitSetDefaultShippingAddressAction;
use Commercetools\Api\Models\BusinessUnit\MyBusinessUnitSetDefaultShippingAddressActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitUpdateAction>
 */
final class MyBusinessUnitUpdateActionBuilder implements Builder
{
    public function build(): MyBusinessUnitUpdateAction
    {
        return new MyBusinessUnitUpdateActionModel(
        );
    }

    public static function of(): MyBusinessUnitUpdateActionBuilder
    {
        return new self();
    }
}
