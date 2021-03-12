<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantChannelAvailabilityMap>
 */
final class ProductVariantChannelAvailabilityMapBuilder implements Builder
{




    public function build(): ProductVariantChannelAvailabilityMap
    {
        return new ProductVariantChannelAvailabilityMapModel(
        );
    }

    public static function of(): ProductVariantChannelAvailabilityMapBuilder
    {
        return new self();
    }
}
