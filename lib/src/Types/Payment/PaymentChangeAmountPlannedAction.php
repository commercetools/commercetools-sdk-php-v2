<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\Money;

interface PaymentChangeAmountPlannedAction extends PaymentUpdateAction {
    const FIELD_AMOUNT = 'amount';

    /**
     * @return Money
     */
    public function getAmount();

    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount);

}
