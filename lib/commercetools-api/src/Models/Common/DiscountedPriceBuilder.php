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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedPrice>
 */
final class DiscountedPriceBuilder implements Builder
{
    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $value;

    /**
     * @var null|ProductDiscountReference|ProductDiscountReferenceBuilder
     */
    private $discount;

    /**
     * <p>Money value of the discounted price.</p>
     *
     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p><a href="ctp:api:type:ProductDiscount">ProductDiscount</a> related to the discounted price.</p>
     *
     * @return null|ProductDiscountReference
     */
    public function getDiscount()
    {
        return $this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @param ?TypedMoney $value
     * @return $this
     */
    public function withValue(?TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?ProductDiscountReference $discount
     * @return $this
     */
    public function withDiscount(?ProductDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?TypedMoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withDiscount() instead
     * @return $this
     */
    public function withDiscountBuilder(?ProductDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function build(): DiscountedPrice
    {
        return new DiscountedPriceModel(
            $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value,
            $this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount
        );
    }

    public static function of(): DiscountedPriceBuilder
    {
        return new self();
    }
}
