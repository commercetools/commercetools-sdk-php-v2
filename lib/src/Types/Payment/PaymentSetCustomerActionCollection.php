<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetCustomerActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetCustomerAction
     */
    public function at($index);

    /**
     * @return PaymentSetCustomerAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetCustomerAction
     */
    public function map($data, $index);
}
