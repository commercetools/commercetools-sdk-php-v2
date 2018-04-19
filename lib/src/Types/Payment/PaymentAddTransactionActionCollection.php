<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentAddTransactionActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentAddTransactionAction
     */
    public function at($index);

    /**
     * @return PaymentAddTransactionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentAddTransactionAction
     */
    public function map($data, $index);
}
