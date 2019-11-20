<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingRate>
 */
final class ShippingRateBuilder implements Builder
{
    /**
     * @var ?ShippingRatePriceTierCollection
     */
    private $tiers;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $price;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $freeAbove;

    /**
     * @var ?bool
     */
    private $isMatching;

    /**
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @return null|TypedMoney
     */
    public function getPrice()
    {
        return $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|TypedMoney
     */
    public function getFreeAbove()
    {
        return $this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove;
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
    public function withTiers(?ShippingRatePriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?TypedMoney $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFreeAbove(?TypedMoney $freeAbove)
    {
        $this->freeAbove = $freeAbove;

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
    public function withPriceBuilder(?TypedMoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFreeAboveBuilder(?TypedMoneyBuilder $freeAbove)
    {
        $this->freeAbove = $freeAbove;

        return $this;
    }

    public function build(): ShippingRate
    {
        return new ShippingRateModel(
            $this->tiers,
            ($this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price),
            ($this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove),
            $this->isMatching
        );
    }

    public static function of(): ShippingRateBuilder
    {
        return new self();
    }
}
