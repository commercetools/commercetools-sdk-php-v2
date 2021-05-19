<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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
     * @var null|Money|MoneyBuilder
     */
    private $price;

    /**
     * @var null|Money|MoneyBuilder
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
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|Money
     */
    public function getFreeAbove()
    {
        return $this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove;
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
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
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
     * @param ?Money $freeAbove
     * @return $this
     */
    public function withFreeAbove(?Money $freeAbove)
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
    public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withFreeAbove() instead
     * @return $this
     */
    public function withFreeAboveBuilder(?MoneyBuilder $freeAbove)
    {
        $this->freeAbove = $freeAbove;

        return $this;
    }

    public function build(): ShippingRate
    {
        return new ShippingRateModel(
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove,
            $this->isMatching,
            $this->tiers
        );
    }

    public static function of(): ShippingRateBuilder
    {
        return new self();
    }
}
