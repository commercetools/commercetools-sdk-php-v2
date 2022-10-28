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
 * @implements Builder<CartScoreTier>
 */
final class CartScoreTierBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $score;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $price;

    /**

     * @var null|PriceFunction|PriceFunctionBuilder
     */
    private $priceFunction;

    /**

     * @var ?bool
     */
    private $isMatching;

    /**
     * <p>Abstract value for categorizing a Cart. The range starts at <code>0</code>. The default price covers <code>0</code>, tiers start at <code>1</code>. See <a href="/../tutorials/shipping-rate">Using Tiered Shipping Rates</a> for details and examples.</p>
     *

     * @return null|int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <p>Defines a fixed price for the <code>score</code>.</p>
     *

     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Dynamically calculates a Price for a range of scores.</p>
     *

     * @return null|PriceFunction
     */
    public function getPriceFunction()
    {
        return $this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction;
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
     * @param ?int $score
     * @return $this
     */
    public function withScore(?int $score)
    {
        $this->score = $score;

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
     * @param ?PriceFunction $priceFunction
     * @return $this
     */
    public function withPriceFunction(?PriceFunction $priceFunction)
    {
        $this->priceFunction = $priceFunction;

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

    /**
     * @deprecated use withPriceFunction() instead
     * @return $this
     */
    public function withPriceFunctionBuilder(?PriceFunctionBuilder $priceFunction)
    {
        $this->priceFunction = $priceFunction;

        return $this;
    }

    public function build(): CartScoreTier
    {
        return new CartScoreTierModel(
            $this->score,
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction,
            $this->isMatching
        );
    }

    public static function of(): CartScoreTierBuilder
    {
        return new self();
    }
}
