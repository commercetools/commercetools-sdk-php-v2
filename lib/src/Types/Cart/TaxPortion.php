<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Money;

interface TaxPortion extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_RATE = 'rate';
    const FIELD_AMOUNT = 'amount';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getRate();

    /**
     * @return Money
     */
    public function getAmount();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param int $rate
     * @return $this
     */
    public function setRate(int $rate);

    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount);

}
