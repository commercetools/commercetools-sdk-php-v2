<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountedPrice>
 */
final class DiscountedPriceBuilder implements Builder
{
    /**
     * @var ProductDiscountReference|?ProductDiscountReferenceBuilder
     */
    private $discount;

    /**
     * @var Money|?MoneyBuilder
     */
    private $value;

    /**
     * @return null|ProductDiscountReference
     */
    public function getDiscount()
    {
        return $this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withDiscount(?ProductDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountBuilder(?ProductDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): DiscountedPrice
    {
        return new DiscountedPriceModel(
            ($this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount),
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): DiscountedPriceBuilder
    {
        return new self();
    }
}
