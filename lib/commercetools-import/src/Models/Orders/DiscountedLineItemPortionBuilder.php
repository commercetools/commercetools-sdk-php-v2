<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CartDiscountKeyReference;
use Commercetools\Import\Models\Common\CartDiscountKeyReferenceBuilder;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyBuilder;
use stdClass;

/**
 * @implements Builder<DiscountedLineItemPortion>
 */
final class DiscountedLineItemPortionBuilder implements Builder
{
    /**
     * @var null|CartDiscountKeyReference|CartDiscountKeyReferenceBuilder
     */
    private $discount;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $discountedAmount;

    /**
     * <p>References a cart discount by its key.</p>
     *
     * @return null|CartDiscountKeyReference
     */
    public function getDiscount()
    {
        return $this->discount instanceof CartDiscountKeyReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @return null|Money
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
    }

    /**
     * @param ?CartDiscountKeyReference $discount
     * @return $this
     */
    public function withDiscount(?CartDiscountKeyReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @param ?Money $discountedAmount
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
    public function withDiscountBuilder(?CartDiscountKeyReferenceBuilder $discount)
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

    public function build(): DiscountedLineItemPortion
    {
        return new DiscountedLineItemPortionModel(
            $this->discount instanceof CartDiscountKeyReferenceBuilder ? $this->discount->build() : $this->discount,
            $this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount
        );
    }

    public static function of(): DiscountedLineItemPortionBuilder
    {
        return new self();
    }
}
