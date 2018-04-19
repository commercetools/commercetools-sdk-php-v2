<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetAmountRefundedActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetAmountRefundedAction
     */
    public function at($index);

    /**
     * @return PaymentSetAmountRefundedAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetAmountRefundedAction
     */
    public function map($data, $index);
}
