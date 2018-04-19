<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\TypedMoneyModel;

class HighPrecisionMoneyModel extends TypedMoneyModel implements HighPrecisionMoney
{
    const DISCRIMINATOR_VALUE = 'highPrecision';

    /**
     * @var int
     */
    protected $preciseAmount;

    /**
     * @return int
     */
    public function getPreciseAmount()
    {
        if (is_null($this->preciseAmount)) {
            $value = $this->raw(HighPrecisionMoney::FIELD_PRECISE_AMOUNT);
            $value = (int)$value;
            $this->preciseAmount = $value;
        }
        return $this->preciseAmount;
    }

    /**
     * @param int $preciseAmount
     * @return $this
     */
    public function setPreciseAmount(int $preciseAmount)
    {
        $this->preciseAmount = (int)$preciseAmount;

        return $this;
    }

}
