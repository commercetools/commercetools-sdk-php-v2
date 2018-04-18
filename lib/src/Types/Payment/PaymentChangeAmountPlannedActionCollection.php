<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentChangeAmountPlannedActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentChangeAmountPlannedAction
     */
    public function at($index);

    /**
     * @return PaymentChangeAmountPlannedAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentChangeAmountPlannedAction
     */
    public function map($data, $index);
}
