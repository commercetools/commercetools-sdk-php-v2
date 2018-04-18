<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\UpdateCollection;


interface PaymentUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return PaymentUpdate
     */
    public function at($index);

    /**
     * @return PaymentUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentUpdate
     */
    public function map($data, $index);
}
