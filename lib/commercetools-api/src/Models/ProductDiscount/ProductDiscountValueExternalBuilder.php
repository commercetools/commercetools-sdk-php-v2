<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountValueExternal>
 */
final class ProductDiscountValueExternalBuilder implements Builder
{




    public function build(): ProductDiscountValueExternal
    {
        return new ProductDiscountValueExternalModel(
        );
    }

    public static function of(): ProductDiscountValueExternalBuilder
    {
        return new self();
    }
}
