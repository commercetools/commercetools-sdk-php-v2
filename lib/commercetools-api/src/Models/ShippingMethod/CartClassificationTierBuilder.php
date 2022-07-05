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

     * @var ?bool
     */
    private $isMatching;

    /**
     * <p><code>key</code> selected from the <code>values</code> of the <a href="/projects/project#cartclassificationtype">CartClassificationType</a> configured in the Project.</p>
     *

     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p>Fixed shipping rate for the selected classification.</p>
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

    public function build(): CartClassificationTier
    {
        return new CartClassificationTierModel(
            $this->value,
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->isMatching
        );
    }

    public static function of(): CartClassificationTierBuilder
    {
        return new self();
    }
}
