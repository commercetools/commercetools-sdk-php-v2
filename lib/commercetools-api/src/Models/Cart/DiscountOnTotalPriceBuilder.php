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
 * @implements Builder<DiscountOnTotalPrice>
 */
final class DiscountOnTotalPriceBuilder implements Builder
{
    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $discountedAmount;

    /**

     * @var ?DiscountedTotalPricePortionCollection
     */
    private $includedDiscounts;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $discountedNetAmount;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $discountedGrossAmount;

    /**
     * <p>Money value of the discount on the total price of the Cart or Order.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof TypedMoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
    }

    /**
     * <p>Discounts that impact the total price of the Cart or Order.</p>
     *

     * @return null|DiscountedTotalPricePortionCollection
     */
    public function getIncludedDiscounts()
    {
        return $this->includedDiscounts;
    }

    /**
     * <p>Money value of the discount on the total net price of the Cart or Order.
     * Present only when <code>taxedPrice</code> of the Cart or Order exists.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedNetAmount()
    {
        return $this->discountedNetAmount instanceof TypedMoneyBuilder ? $this->discountedNetAmount->build() : $this->discountedNetAmount;
    }

    /**
     * <p>Money value of the discount on the total gross price of the Cart or Order.
     * Present only when <code>taxedPrice</code> of the Cart or Order exists.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedGrossAmount()
    {
        return $this->discountedGrossAmount instanceof TypedMoneyBuilder ? $this->discountedGrossAmount->build() : $this->discountedGrossAmount;
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
     * @param ?DiscountedTotalPricePortionCollection $includedDiscounts
     * @return $this
     */
    public function withIncludedDiscounts(?DiscountedTotalPricePortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;

        return $this;
    }

    /**
     * @param ?TypedMoney $discountedNetAmount
     * @return $this
     */
    public function withDiscountedNetAmount(?TypedMoney $discountedNetAmount)
    {
        $this->discountedNetAmount = $discountedNetAmount;

        return $this;
    }

    /**
     * @param ?TypedMoney $discountedGrossAmount
     * @return $this
     */
    public function withDiscountedGrossAmount(?TypedMoney $discountedGrossAmount)
    {
        $this->discountedGrossAmount = $discountedGrossAmount;

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

    /**
     * @deprecated use withDiscountedNetAmount() instead
     * @return $this
     */
    public function withDiscountedNetAmountBuilder(?TypedMoneyBuilder $discountedNetAmount)
    {
        $this->discountedNetAmount = $discountedNetAmount;

        return $this;
    }

    /**
     * @deprecated use withDiscountedGrossAmount() instead
     * @return $this
     */
    public function withDiscountedGrossAmountBuilder(?TypedMoneyBuilder $discountedGrossAmount)
    {
        $this->discountedGrossAmount = $discountedGrossAmount;

        return $this;
    }

    public function build(): DiscountOnTotalPrice
    {
        return new DiscountOnTotalPriceModel(
            $this->discountedAmount instanceof TypedMoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount,
            $this->includedDiscounts,
            $this->discountedNetAmount instanceof TypedMoneyBuilder ? $this->discountedNetAmount->build() : $this->discountedNetAmount,
            $this->discountedGrossAmount instanceof TypedMoneyBuilder ? $this->discountedGrossAmount->build() : $this->discountedGrossAmount
        );
    }

    public static function of(): DiscountOnTotalPriceBuilder
    {
        return new self();
    }
}
