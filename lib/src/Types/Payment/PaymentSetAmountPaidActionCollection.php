<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetAmountPaidActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetAmountPaidAction
     */
    public function at($index);

    /**
     * @return PaymentSetAmountPaidAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetAmountPaidAction
     */
    public function map($data, $index);
}
