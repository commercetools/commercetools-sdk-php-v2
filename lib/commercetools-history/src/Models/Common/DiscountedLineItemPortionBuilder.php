<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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
     * @var null|Reference|ReferenceBuilder
     */
    private $discount;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $discountedAmount;

    /**
     * @return null|Reference
     */
    public function getDiscount()
    {
        return $this->discount instanceof ReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @return null|Money
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
    }

    /**
     * @param ?Reference $discount
     * @return $this
     */
    public function withDiscount(?Reference $discount)
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
    public function withDiscountBuilder(?ReferenceBuilder $discount)
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
            $this->discount instanceof ReferenceBuilder ? $this->discount->build() : $this->discount,
            $this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount
        );
    }

    public static function of(): DiscountedLineItemPortionBuilder
    {
        return new self();
    }
}
