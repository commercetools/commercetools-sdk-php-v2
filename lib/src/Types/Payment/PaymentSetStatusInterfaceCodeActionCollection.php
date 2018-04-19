<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetStatusInterfaceCodeActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @param $index
     * @return PaymentSetStatusInterfaceCodeAction
     */
    public function at($index);

    /**
     * @return PaymentSetStatusInterfaceCodeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetStatusInterfaceCodeAction
     */
    public function map($data, $index);
}
