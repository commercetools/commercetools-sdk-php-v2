<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetMethodInfoMethodActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetMethodInfoMethodAction
     */
    public function at($index);

    /**
     * @return PaymentSetMethodInfoMethodAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetMethodInfoMethodAction
     */
    public function map($data, $index);
}
