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
 * @implements Builder<ProductDiscountUpdateAction>
 */
final class ProductDiscountUpdateActionBuilder implements Builder
{




    public function build(): ProductDiscountUpdateAction
    {
        return new ProductDiscountUpdateActionModel(
        );
    }

    public static function of(): ProductDiscountUpdateActionBuilder
    {
        return new self();
    }
}
