<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\MoneyModel;

use Commercetools\Types;

class TypedMoneyModel extends MoneyModel implements TypedMoney {
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setType(static::DISCRIMINATOR_VALUE);
    }

    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $fractionDigits;

    /**
     * @return string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(TypedMoney::FIELD_TYPE);
            $value = (string)$value;
            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return int
     */
    public function getFractionDigits()
    {
        if (is_null($this->fractionDigits)) {
            $value = $this->raw(TypedMoney::FIELD_FRACTION_DIGITS);
            $value = (int)$value;
            $this->fractionDigits = $value;
        }
        return $this->fractionDigits;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = (string)$type;

        return $this;
    }
    /**
     * @param int $fractionDigits
     * @return $this
     */
    public function setFractionDigits(int $fractionDigits)
    {
        $this->fractionDigits = (int)$fractionDigits;

        return $this;
    }

}
