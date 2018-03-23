<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Payment\PaymentReference;

interface OrderAddPaymentAction extends OrderUpdateAction {
    const FIELD_PAYMENT = 'payment';

    /**
     * @return PaymentReference
     */
    public function getPayment();

    /**
     * @param PaymentReference $payment
     * @return $this
     */
    public function setPayment(PaymentReference $payment);

}
