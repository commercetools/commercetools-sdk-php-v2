<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetAuthorizationActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentSetAuthorizationAction
     */
    public function at($index);

    /**
     * @return PaymentSetAuthorizationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetAuthorizationAction
     */
    public function map($data, $index);
}
