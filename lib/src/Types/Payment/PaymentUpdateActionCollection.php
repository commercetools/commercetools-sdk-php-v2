<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\Collection;

interface PaymentUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return PaymentUpdateAction
     */
    public function at($index);

    /**
     * @return PaymentUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentUpdateAction
     */
    public function map($data, $index);
}
