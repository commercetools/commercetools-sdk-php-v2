<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentTransitionStateActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentTransitionStateAction
     */
    public function at($index);

    /**
     * @return PaymentTransitionStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentTransitionStateAction
     */
    public function map($data, $index);
}
