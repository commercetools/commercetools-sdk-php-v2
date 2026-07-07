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
     * <ul>
     * <li>
     * <p>When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Product Discount</a> applies and the fractional part of the resulting discounted price is 0.5, the discounted price is <a href="https://en.wikipedia.org/wiki/Rounding#Rounding_half_down">rounded half down</a>.</p>
     * <p>For example, a price of €1.01 (<code>centAmount: 101</code>) with a 50% discount (<code>permyriad: 5000</code>) calculates to €0.505. Since the fractional half-cent is exactly 0.5, it rounds down to €0.50 (<code>centAmount: 50</code>).</p>
     * </li>
     * <li>
     * <p>When an <a href="ctp:api:type:ProductDiscountValueAbsolute">absolute Product Discount</a> exceeds the price of the Product Variant, the resulting discounted price is set to <code>0</code>.</p>
     * </li>
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
