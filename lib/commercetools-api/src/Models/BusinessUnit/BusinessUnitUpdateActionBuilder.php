<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitUpdateAction>
 */
final class BusinessUnitUpdateActionBuilder implements Builder
{
    public function build(): BusinessUnitUpdateAction
    {
        return new BusinessUnitUpdateActionModel(
        );
    }

    public static function of(): BusinessUnitUpdateActionBuilder
    {
        return new self();
    }
}
