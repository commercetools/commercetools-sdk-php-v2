<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedLineItemPrice>
 */
final class DiscountedLineItemPriceBuilder implements Builder
{
    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $value;

    /**

     * @var ?DiscountedLineItemPortionCollection
     */
    private $includedDiscounts;

    /**
     * <p>Money value of the discounted Line Item or Custom Line Item.</p>
     * <p>When multiple discounts from <code>includedDiscounts</code> apply, they are applied sequentially based on the <code>sortOrder</code> of their associated <a href="ctp:api:type:CartDiscount">Cart Discounts</a> (discounts with higher <code>sortOrder</code> values are applied first). The Cart's <code>priceRoundingMode</code> field (<a href="ctp:api:type:RoundingMode">RoundingMode</a>) is applied after each discount calculation, so rounding occurs after each discount step rather than only once on the final cumulative amount.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Discount applicable on the Line Item or Custom Line Item.</p>
     *

     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts()
    {
        return $this->includedDiscounts;
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
     * @param ?DiscountedLineItemPortionCollection $includedDiscounts
     * @return $this
     */
    public function withIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;

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

    public function build(): DiscountedLineItemPrice
    {
        return new DiscountedLineItemPriceModel(
            $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value,
            $this->includedDiscounts
        );
    }

    public static function of(): DiscountedLineItemPriceBuilder
    {
        return new self();
    }
}
