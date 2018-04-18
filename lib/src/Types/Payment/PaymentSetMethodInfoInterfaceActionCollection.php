<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetMethodInfoInterfaceActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentSetMethodInfoInterfaceAction
     */
    public function at($index);

    /**
     * @return PaymentSetMethodInfoInterfaceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetMethodInfoInterfaceAction
     */
    public function map($data, $index);
}
