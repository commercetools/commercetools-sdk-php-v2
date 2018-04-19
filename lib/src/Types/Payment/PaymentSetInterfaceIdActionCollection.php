<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetInterfaceIdActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetInterfaceIdAction
     */
    public function at($index);

    /**
     * @return PaymentSetInterfaceIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetInterfaceIdAction
     */
    public function map($data, $index);
}
