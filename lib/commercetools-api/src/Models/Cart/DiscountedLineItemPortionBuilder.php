<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountedLineItemPortion>
 */
final class DiscountedLineItemPortionBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $discountedAmount;

    /**
     * @var CartDiscountReference|?CartDiscountReferenceBuilder
     */
    private $discount;

    public function __construct()
    {
    }

    /**
     * @return null|Money
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
    }

    /**
     * @return null|CartDiscountReference
     */
    public function getDiscount()
    {
        return $this->discount instanceof CartDiscountReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @return $this
     */
    public function withDiscountedAmount(?Money $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscount(?CartDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedAmountBuilder(?MoneyBuilder $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountBuilder(?CartDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function build(): DiscountedLineItemPortion
    {
        return new DiscountedLineItemPortionModel(
            ($this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount),
            ($this->discount instanceof CartDiscountReferenceBuilder ? $this->discount->build() : $this->discount)
        );
    }

    public static function of(): DiscountedLineItemPortionBuilder
    {
        return new self();
    }
}
