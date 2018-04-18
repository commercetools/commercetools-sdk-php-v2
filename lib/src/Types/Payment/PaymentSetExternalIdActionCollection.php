<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetExternalIdActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentSetExternalIdAction
     */
    public function at($index);

    /**
     * @return PaymentSetExternalIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetExternalIdAction
     */
    public function map($data, $index);
}
