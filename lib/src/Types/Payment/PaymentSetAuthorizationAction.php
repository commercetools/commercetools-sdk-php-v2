<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\Money;

interface PaymentSetAuthorizationAction extends PaymentUpdateAction {
    const FIELD_AMOUNT = 'amount';
    const FIELD_UNTIL = 'until';

    /**
     * @return Money
     */
    public function getAmount();

    /**
     * @return \DateTimeImmutable
     */
    public function getUntil();

    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount);

    /**
     * @param \DateTimeImmutable $until
     * @return $this
     */
    public function setUntil($until);

}
