<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\Collection;

interface PaymentStatusCollection extends Collection {
    /**
     * @param $index
     * @return PaymentStatus
     */
    public function at($index);

    /**
     * @return PaymentStatus
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentStatus
     */
    public function map($data, $index);
}
