<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingRateInputType>
 */
final class ShippingRateInputTypeBuilder implements Builder
{




    public function build(): ShippingRateInputType
    {
        return new ShippingRateInputTypeModel(
        );
    }

    public static function of(): ShippingRateInputTypeBuilder
    {
        return new self();
    }
}
