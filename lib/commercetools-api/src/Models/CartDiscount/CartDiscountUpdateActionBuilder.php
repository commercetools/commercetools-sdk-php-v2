<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountUpdateAction>
 */
final class CartDiscountUpdateActionBuilder implements Builder
{
    public function build(): CartDiscountUpdateAction
    {
        return new CartDiscountUpdateActionModel(
        );
    }

    public static function of(): CartDiscountUpdateActionBuilder
    {
        return new self();
    }
}
