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

class CartScoreTierModel extends ShippingRatePriceTierModel implements CartScoreTier
{
    const DISCRIMINATOR_VALUE = 'CartScore';

    /**
     * @var string
     */
    protected $score;
    /**
     * @var Money
     */
    protected $price;
    /**
     * @var PriceFunction
     */
    protected $priceFunction;
    /**
     * @var mixed
     */
    protected $isMatching;

    /**
     * @return string
     */
    public function getScore()
    {
        if (is_null($this->score)) {
            $value = $this->raw(CartScoreTier::FIELD_SCORE);
            $value = (string)$value;
            $this->score = $value;
        }
        return $this->score;
    }
    /**
     * @return Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(CartScoreTier::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return PriceFunction
     */
    public function getPriceFunction()
    {
        if (is_null($this->priceFunction)) {
            $value = $this->raw(CartScoreTier::FIELD_PRICE_FUNCTION);
            if (is_null($value)) {
                return $this->mapData(PriceFunction::class, null);
            }
            $value = $this->mapData(PriceFunction::class, $value);

            $this->priceFunction = $value;
        }
        return $this->priceFunction;
    }
    /**
     * @return mixed
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            $value = $this->raw(CartScoreTier::FIELD_IS_MATCHING);
            $this->isMatching = $value;
        }
        return $this->isMatching;
    }

    /**
     * @param string $score
     * @return $this
     */
    public function setScore(string $score)
    {
        $this->score = (string)$score;

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
     * @param PriceFunction $priceFunction
     * @return $this
     */
    public function setPriceFunction(PriceFunction $priceFunction)
    {
        $this->priceFunction = $priceFunction;

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
