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
     * @var Money|?MoneyBuilder
     */
    private $price;

    /**
     * @var ?bool
     */
    private $isMatching;

    /**
     * @return null|int
     */
    public function getMinimumCentAmount()
    {
        return $this->minimumCentAmount;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * @return $this
     */
    public function withMinimumCentAmount(?int $minimumCentAmount)
    {
        $this->minimumCentAmount = $minimumCentAmount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsMatching(?bool $isMatching)
    {
        $this->isMatching = $isMatching;

        return $this;
    }

    /**
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
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            $this->isMatching
        );
    }

    public static function of(): CartValueTierBuilder
    {
        return new self();
    }
}
