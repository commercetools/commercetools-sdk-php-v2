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

class TaxPortionModel extends JsonObjectModel implements TaxPortion
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $rate;
    /**
     * @var Money
     */
    protected $amount;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(TaxPortion::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return int
     */
    public function getRate()
    {
        if (is_null($this->rate)) {
            $value = $this->raw(TaxPortion::FIELD_RATE);
            $value = (int)$value;
            $this->rate = $value;
        }
        return $this->rate;
    }
    /**
     * @return Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            $value = $this->raw(TaxPortion::FIELD_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amount = $value;
        }
        return $this->amount;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param int $rate
     * @return $this
     */
    public function setRate(int $rate)
    {
        $this->rate = (int)$rate;

        return $this;
    }
    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

}
