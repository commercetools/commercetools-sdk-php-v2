<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentChangeTransactionTimestampActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentChangeTransactionTimestampAction
     */
    public function at($index);

    /**
     * @return PaymentChangeTransactionTimestampAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentChangeTransactionTimestampAction
     */
    public function map($data, $index);
}
