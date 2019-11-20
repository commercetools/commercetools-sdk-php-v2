<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountValue>
 */
final class CartDiscountValueBuilder implements Builder
{
    public function build(): CartDiscountValue
    {
        return new CartDiscountValueModel(
        );
    }

    public static function of(): CartDiscountValueBuilder
    {
        return new self();
    }
}
