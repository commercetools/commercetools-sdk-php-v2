<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class SubRateModel extends JsonObjectModel implements SubRate {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $amount;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(SubRate::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return int
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            $value = $this->raw(SubRate::FIELD_AMOUNT);
            $value = (int)$value;
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
     * @param int $amount
     * @return $this
     */
    public function setAmount(int $amount)
    {
        $this->amount = (int)$amount;

        return $this;
    }

}
