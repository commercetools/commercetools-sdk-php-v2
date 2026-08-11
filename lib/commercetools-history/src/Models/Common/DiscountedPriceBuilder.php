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
     * <ul>
     * <li>When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Product Discount</a> applies and the fractional part of the resulting discounted price is 0.5, the discounted price is <a href="https://en.wikipedia.org/wiki/Rounding#Rounding_half_down">rounded half down</a>.</li>
     * <li>When an <a href="ctp:api:type:ProductDiscountValueAbsolute">absolute Product Discount</a> exceeds the price of the Product Variant, the resulting discounted price is set to <code>0</code>.</li>
     * </ul>
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
