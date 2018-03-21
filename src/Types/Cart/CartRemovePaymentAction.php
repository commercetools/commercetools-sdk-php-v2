<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Payment\PaymentReference;

interface CartRemovePaymentAction extends CartUpdateAction {
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
