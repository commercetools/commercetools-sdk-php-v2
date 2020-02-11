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
 * @implements Builder<ProductDiscountValue>
 */
final class ProductDiscountValueBuilder implements Builder
{




    public function build(): ProductDiscountValue
    {
        return new ProductDiscountValueModel(
        );
    }

    public static function of(): ProductDiscountValueBuilder
    {
        return new self();
    }
}
