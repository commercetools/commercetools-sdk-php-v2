<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetKeyActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetKeyAction
     */
    public function at($index);

    /**
     * @return PaymentSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetKeyAction
     */
    public function map($data, $index);
}
