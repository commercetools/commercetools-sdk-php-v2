<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierModel;

use Commercetools\Types\Common\Money;

class CartClassificationTierModel extends ShippingRatePriceTierModel implements CartClassificationTier {
    const DISCRIMINATOR_VALUE = 'CartClassification';

    /**
     * @var string
     */
    protected $value;
    /**
     * @var Money
     */
    protected $price;
    /**
     * @var mixed
     */
    protected $isMatching;

    /**
     * @return string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(CartClassificationTier::FIELD_VALUE);
            $value = (string)$value;
            $this->value = $value;
        }
        return $this->value;
    }
    /**
     * @return Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(CartClassificationTier::FIELD_PRICE);
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
            $value = $this->raw(CartClassificationTier::FIELD_IS_MATCHING);
            $this->isMatching = $value;
        }
        return $this->isMatching;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->value = (string)$value;

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
