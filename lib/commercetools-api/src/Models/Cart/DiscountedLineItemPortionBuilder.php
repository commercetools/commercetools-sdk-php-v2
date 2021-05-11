<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedLineItemPortion>
 */
final class DiscountedLineItemPortionBuilder implements Builder
{
    /**
     * @var null|CartDiscountReference|CartDiscountReferenceBuilder
     */
    private $discount;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $discountedAmount;

    /**
     * @return null|CartDiscountReference
     */
    public function getDiscount()
    {
        return $this->discount instanceof CartDiscountReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof TypedMoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
    }

    /**
     * @param ?CartDiscountReference $discount
     * @return $this
     */
    public function withDiscount(?CartDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @param ?TypedMoney $discountedAmount
     * @return $this
     */
    public function withDiscountedAmount(?TypedMoney $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    /**
     * @deprecated use withDiscount() instead
     * @return $this
     */
    public function withDiscountBuilder(?CartDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @deprecated use withDiscountedAmount() instead
     * @return $this
     */
    public function withDiscountedAmountBuilder(?TypedMoneyBuilder $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    public function build(): DiscountedLineItemPortion
    {
        return new DiscountedLineItemPortionModel(
            $this->discount instanceof CartDiscountReferenceBuilder ? $this->discount->build() : $this->discount,
            $this->discountedAmount instanceof TypedMoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount
        );
    }

    public static function of(): DiscountedLineItemPortionBuilder
    {
        return new self();
    }
}
