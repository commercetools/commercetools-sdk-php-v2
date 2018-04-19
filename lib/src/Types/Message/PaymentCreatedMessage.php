<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Payment\Payment;

interface PaymentCreatedMessage extends Message
{
    const FIELD_PAYMENT = 'payment';

    /**
     * @return Payment
     */
    public function getPayment();

    /**
     * @param Payment $payment
     * @return $this
     */
    public function setPayment(Payment $payment);

}
