<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountValueAbsolute>
 */
final class CartDiscountValueAbsoluteBuilder implements Builder
{
    /**
     * @var ?TypedMoneyCollection
     */
    private $money;

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @return $this
     */
    public function withMoney(?TypedMoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }

    public function build(): CartDiscountValueAbsolute
    {
        return new CartDiscountValueAbsoluteModel(
            $this->money
        );
    }

    public static function of(): CartDiscountValueAbsoluteBuilder
    {
        return new self();
    }
}
