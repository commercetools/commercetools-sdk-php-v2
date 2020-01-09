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
     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts()
    {
        return $this->includedDiscounts;
    }

    /**
     * @return $this
     */
    public function withValue(?TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;

        return $this;
    }

    /**
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
