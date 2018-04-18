<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface PaymentInfoCollection extends Collection {
    /**
     * @param $index
     * @return PaymentInfo
     */
    public function at($index);

    /**
     * @return PaymentInfo
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentInfo
     */
    public function map($data, $index);
}
