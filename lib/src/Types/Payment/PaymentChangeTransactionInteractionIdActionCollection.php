<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentChangeTransactionInteractionIdActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentChangeTransactionInteractionIdAction
     */
    public function at($index);

    /**
     * @return PaymentChangeTransactionInteractionIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentChangeTransactionInteractionIdAction
     */
    public function map($data, $index);
}
