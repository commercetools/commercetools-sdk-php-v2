<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetCustomTypeActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return PaymentSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetCustomTypeAction
     */
    public function map($data, $index);
}
