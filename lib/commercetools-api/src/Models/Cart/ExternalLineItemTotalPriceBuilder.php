<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ExternalLineItemTotalPrice>
 */
final class ExternalLineItemTotalPriceBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $totalPrice;

    /**
     * @var Money|?MoneyBuilder
     */
    private $price;

    /**
     * @return null|Money
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return $this
     */
    public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

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
    public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

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

    public function build(): ExternalLineItemTotalPrice
    {
        return new ExternalLineItemTotalPriceModel(
            ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price)
        );
    }

    public static function of(): ExternalLineItemTotalPriceBuilder
    {
        return new self();
    }
}
