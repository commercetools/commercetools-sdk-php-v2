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
 * @implements Builder<CartScoreTier>
 */
final class CartScoreTierBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?int
     */
    private $score;

    /**
     * @var Money|?MoneyBuilder
     */
    private $price;

    /**
     * @var ?bool
     */
    private $isMatching;

    /**
     * @var PriceFunction|?PriceFunctionBuilder
     */
    private $priceFunction;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|bool
     */
    public function getIsMatching()
    {
        return $this->isMatching;
    }

    /**
     * @return null|PriceFunction
     */
    public function getPriceFunction()
    {
        return $this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withScore(?int $score)
    {
        $this->score = $score;

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
    public function withIsMatching(?bool $isMatching)
    {
        $this->isMatching = $isMatching;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceFunction(?PriceFunction $priceFunction)
    {
        $this->priceFunction = $priceFunction;

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
    public function withPriceFunctionBuilder(?PriceFunctionBuilder $priceFunction)
    {
        $this->priceFunction = $priceFunction;

        return $this;
    }

    public function build(): CartScoreTier
    {
        return new CartScoreTierModel(
            $this->type,
            $this->score,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            $this->isMatching,
            ($this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction)
        );
    }

    public static function of(): CartScoreTierBuilder
    {
        return new self();
    }
}
