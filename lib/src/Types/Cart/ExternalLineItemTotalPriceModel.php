<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Money;

class ExternalLineItemTotalPriceModel extends JsonObjectModel implements ExternalLineItemTotalPrice {
    /**
     * @var Money
     */
    protected $price;
    /**
     * @var Money
     */
    protected $totalPrice;

    /**
     * @return Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ExternalLineItemTotalPrice::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            $value = $this->raw(ExternalLineItemTotalPrice::FIELD_TOTAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->totalPrice = $value;
        }
        return $this->totalPrice;
    }

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param Money $totalPrice
     * @return $this
     */
    public function setTotalPrice(Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

}
