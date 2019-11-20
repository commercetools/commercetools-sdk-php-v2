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
 * @implements Builder<ShippingRateDraft>
 */
final class ShippingRateDraftBuilder implements Builder
{
    /**
     * @var ?ShippingRatePriceTierCollection
     */
    private $tiers;

    /**
     * @var Money|?MoneyBuilder
     */
    private $price;

    /**
     * @var Money|?MoneyBuilder
     */
    private $freeAbove;

    /**
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

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
    public function withPrice(?Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFreeAbove(?Money $freeAbove)
    {
        $this->freeAbove = $freeAbove;

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

    /**
     * @return $this
     */
    public function withFreeAboveBuilder(?MoneyBuilder $freeAbove)
    {
        $this->freeAbove = $freeAbove;

        return $this;
    }

    public function build(): ShippingRateDraft
    {
        return new ShippingRateDraftModel(
            $this->tiers,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            ($this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove)
        );
    }

    public static function of(): ShippingRateDraftBuilder
    {
        return new self();
    }
}
