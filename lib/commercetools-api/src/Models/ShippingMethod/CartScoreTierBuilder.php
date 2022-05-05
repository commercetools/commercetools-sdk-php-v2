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
     * @var ?float
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
     * @return null|float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|PriceFunction
     */
    public function getPriceFunction()
    {
        return $this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction;
    }

    /**
     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * @param ?float $score
     * @return $this
     */
    public function withScore(?float $score)
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
