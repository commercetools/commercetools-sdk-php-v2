<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountTarget>
 */
final class CartDiscountTargetBuilder implements Builder
{
    public function build(): CartDiscountTarget
    {
        return new CartDiscountTargetModel(
        );
    }

    public static function of(): CartDiscountTargetBuilder
    {
        return new self();
    }
}
