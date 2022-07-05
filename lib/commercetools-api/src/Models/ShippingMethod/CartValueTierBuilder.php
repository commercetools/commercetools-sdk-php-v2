<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartValueTier>
 */
final class CartValueTierBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $minimumCentAmount;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $price;

    /**

     * @var ?bool
     */
    private $isMatching;

    /**
     * <p>Minimum total price of a Cart for which a shipping rate applies.</p>
     *

     * @return null|int
     */
    public function getMinimumCentAmount()
    {
        return $this->minimumCentAmount;
    }

    /**
     * <p>Fixed shipping rate Price for a CartValue.</p>
     *

     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Appears in response to <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> if the shipping rate matches the search query.</p>
     *

     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * @param ?int $minimumCentAmount
     * @return $this
     */
    public function withMinimumCentAmount(?int $minimumCentAmount)
    {
        $this->minimumCentAmount = $minimumCentAmount;

        return $this;
    }

    /**
     * @param ?Money $price
     * @return $this
     */
    public function withPrice(?Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param ?bool $isMatching
     * @return $this
     */
    public function withIsMatching(?bool $isMatching)
    {
        $this->isMatching = $isMatching;

        return $this;
    }

    /**
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): CartValueTier
    {
        return new CartValueTierModel(
            $this->minimumCentAmount,
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->isMatching
        );
    }

    public static function of(): CartValueTierBuilder
    {
        return new self();
    }
}
