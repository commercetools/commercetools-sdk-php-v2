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
 * @implements Builder<ShippingRateDraft>
 */
final class ShippingRateDraftBuilder implements Builder
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
     * <p>The shipping is free if the order total (the sum of line item prices) exceeds the freeAbove value.
     * Note: <code>freeAbove</code> applies before any Cart or Product discounts, and can cause discounts to apply in invalid scenarios.
     * Use a Cart Discount to set the shipping price to 0 to avoid providing free shipping in invalid discount scenarios.</p>
     *
     * @return null|Money
     */
    public function getFreeAbove()
    {
        return $this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove;
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

    public function build(): ShippingRateDraft
    {
        return new ShippingRateDraftModel(
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove,
            $this->tiers
        );
    }

    public static function of(): ShippingRateDraftBuilder
    {
        return new self();
    }
}
