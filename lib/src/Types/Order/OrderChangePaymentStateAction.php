<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderChangePaymentStateAction extends OrderUpdateAction
{
    const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     * @return string
     */
    public function getPaymentState();

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState);

}
