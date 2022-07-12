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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Currency amount of the ShippingRate.</p>
     *

     * @return null|TypedMoney
     */
    public function getPrice()
    {
        return $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Shipping is free if the sum of the (Custom) Line Item Prices reaches the specified value.</p>
     *

     * @return null|TypedMoney
     */
    public function getFreeAbove()
    {
        return $this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove;
    }

    /**
     * <p><code>true</code> if the ShippingRate matches given <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Location">Location</a>.
     * Only appears in response to requests for <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> or
     * <a href="#get-shippingmethods-for-a-location">Get ShippingMethods for a Location</a>.</p>
     *

     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * <p>Price tiers for the ShippingRate.</p>
     *

     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @param ?TypedMoney $price
     * @return $this
     */
    public function withPrice(?TypedMoney $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param ?TypedMoney $freeAbove
     * @return $this
     */
    public function withFreeAbove(?TypedMoney $freeAbove)
    {
        $this->freeAbove = $freeAbove;

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
     * @param ?ShippingRatePriceTierCollection $tiers
     * @return $this
     */
    public function withTiers(?ShippingRatePriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?TypedMoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withFreeAbove() instead
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
