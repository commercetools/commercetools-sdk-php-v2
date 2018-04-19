<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShippingMethod\ShippingRatePriceTierModel;

use Commercetools\Types\Common\Money;

class CartValueTierModel extends ShippingRatePriceTierModel implements CartValueTier
{
    const DISCRIMINATOR_VALUE = 'CartValue';

    /**
     * @var int
     */
    protected $minimumCentAmount;
    /**
     * @var Money
     */
    protected $price;
    /**
     * @var mixed
     */
    protected $isMatching;

    /**
     * @return int
     */
    public function getMinimumCentAmount()
    {
        if (is_null($this->minimumCentAmount)) {
            $value = $this->raw(CartValueTier::FIELD_MINIMUM_CENT_AMOUNT);
            $value = (int)$value;
            $this->minimumCentAmount = $value;
        }
        return $this->minimumCentAmount;
    }
    /**
     * @return Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(CartValueTier::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return mixed
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            $value = $this->raw(CartValueTier::FIELD_IS_MATCHING);
            $this->isMatching = $value;
        }
        return $this->isMatching;
    }

    /**
     * @param int $minimumCentAmount
     * @return $this
     */
    public function setMinimumCentAmount(int $minimumCentAmount)
    {
        $this->minimumCentAmount = (int)$minimumCentAmount;

        return $this;
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
     * @param $isMatching
     * @return $this
     */
    public function setIsMatching($isMatching)
    {
        $this->isMatching = $isMatching;

        return $this;
    }

}
