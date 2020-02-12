<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountShippingCostTarget>
 */
final class CartDiscountShippingCostTargetBuilder implements Builder
{
    public function build(): CartDiscountShippingCostTarget
    {
        return new CartDiscountShippingCostTargetModel(
        );
    }

    public static function of(): CartDiscountShippingCostTargetBuilder
    {
        return new self();
    }
}
