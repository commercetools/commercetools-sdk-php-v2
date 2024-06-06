<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyBuilder;
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

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $price;

    /**

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
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

     * @return null|CentPrecisionMoney
     */
    public function getPrice()
    {
        return $this->price instanceof CentPrecisionMoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p><a href="/../api/shipping-delivery-overview#free-shipping">Free shipping</a> is applied if the sum of the (Custom) Line Item Prices reaches the specified value.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getFreeAbove()
    {
        return $this->freeAbove instanceof CentPrecisionMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove;
    }

    /**
     * <p><code>true</code> if the ShippingRate matches given <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Location">Location</a>.
     * Only appears in response to requests for <a href="ctp:api:endpoint:/{projectKey}/shipping-methods/matching-cart:GET">Get ShippingMethods for a Cart</a> or
     * <a href="ctp:api:endpoint:/{projectKey}/shipping-methods/matching-location:GET">Get ShippingMethods for a Location</a>.</p>
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
     * @param ?CentPrecisionMoney $price
     * @return $this
     */
    public function withPrice(?CentPrecisionMoney $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param ?CentPrecisionMoney $freeAbove
     * @return $this
     */
    public function withFreeAbove(?CentPrecisionMoney $freeAbove)
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
    public function withPriceBuilder(?CentPrecisionMoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withFreeAbove() instead
     * @return $this
     */
    public function withFreeAboveBuilder(?CentPrecisionMoneyBuilder $freeAbove)
    {
        $this->freeAbove = $freeAbove;

        return $this;
    }

    public function build(): ShippingRate
    {
        return new ShippingRateModel(
            $this->price instanceof CentPrecisionMoneyBuilder ? $this->price->build() : $this->price,
            $this->freeAbove instanceof CentPrecisionMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove,
            $this->isMatching,
            $this->tiers
        );
    }

    public static function of(): ShippingRateBuilder
    {
        return new self();
    }
}
