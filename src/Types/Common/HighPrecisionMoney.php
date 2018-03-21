<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

interface HighPrecisionMoney extends TypedMoney {
    const FIELD_PRECISE_AMOUNT = 'preciseAmount';

    /**
     * @return int
     */
    public function getPreciseAmount();

    /**
     * @param int $preciseAmount
     * @return $this
     */
    public function setPreciseAmount(int $preciseAmount);

}
