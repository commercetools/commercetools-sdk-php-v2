<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;

/**
 * @implements Builder<ShippingRate>
 */
final class ShippingRateBuilder implements Builder
{
    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $price;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $freeAbove;

    /**
     * @var ?bool
     */
    private $isMatching;

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    private $tiers;

    /**
     * @return null|TypedMoney
     */
    public function getPrice()
    {
        return $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>The shipping is free if the order total (the sum of line item prices) exceeds the <code>freeAbove</code> value.
     * Note: <code>freeAbove</code> applies before any Cart or Product discounts, and can cause discounts to apply in invalid scenarios.
     * Use a Cart Discount to set the shipping price to 0 to avoid providing free shipping in invalid discount scenarios.</p>
     *
     * @return null|TypedMoney
     */
    public function getFreeAbove()
    {
        return $this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove;
    }

    /**
     * <p>Only appears in response to requests for shipping methods by cart or location to mark this shipping rate as one that matches the cart or location.</p>
     *
     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * <p>A list of shipping rate price tiers.</p>
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
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
    public function withTiers(?ShippingRatePriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

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
            $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price,
            $this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove,
            $this->isMatching,
            $this->tiers
        );
    }

    public static function of(): ShippingRateBuilder
    {
        return new self();
    }
}
