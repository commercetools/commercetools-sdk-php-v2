<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentChangeTransactionStateActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentChangeTransactionStateAction
     */
    public function at($index);

    /**
     * @return PaymentChangeTransactionStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentChangeTransactionStateAction
     */
    public function map($data, $index);
}
