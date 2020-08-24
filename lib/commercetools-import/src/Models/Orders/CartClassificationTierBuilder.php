<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyBuilder;
use stdClass;

/**
 * @implements Builder<CartClassificationTier>
 */
final class CartClassificationTierBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $value;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $price;

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    private $tiers;

    /**
     * @var ?bool
     */
    private $isMatching;

    /**
     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

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
     * @param ?ShippingRatePriceTierCollection $tiers
     * @return $this
     */
    public function withTiers(?ShippingRatePriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

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
     * @return $this
     */
    public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): CartClassificationTier
    {
        return new CartClassificationTierModel(
            $this->value,
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->tiers,
            $this->isMatching
        );
    }

    public static function of(): CartClassificationTierBuilder
    {
        return new self();
    }
}
