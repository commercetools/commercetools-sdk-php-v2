<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObjectModel;

class MoneyModel extends JsonObjectModel implements Money {
    /**
     * @var int
     */
    protected $centAmount;
    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * @return int
     */
    public function getCentAmount()
    {
        if (is_null($this->centAmount)) {
            $value = $this->raw(Money::FIELD_CENT_AMOUNT);
            $value = (int)$value;
            $this->centAmount = $value;
        }
        return $this->centAmount;
    }
    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            $value = $this->raw(Money::FIELD_CURRENCY_CODE);
            $value = (string)$value;
            $this->currencyCode = $value;
        }
        return $this->currencyCode;
    }

    /**
     * @param int $centAmount
     * @return $this
     */
    public function setCentAmount(int $centAmount)
    {
        $this->centAmount = (int)$centAmount;

        return $this;
    }
    /**
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = (string)$currencyCode;

        return $this;
    }

}
