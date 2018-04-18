<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetCustomFieldActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return PaymentSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetCustomFieldAction
     */
    public function map($data, $index);
}
