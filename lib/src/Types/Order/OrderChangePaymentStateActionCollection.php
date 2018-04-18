<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderChangePaymentStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderChangePaymentStateAction
     */
    public function at($index);

    /**
     * @return OrderChangePaymentStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderChangePaymentStateAction
     */
    public function map($data, $index);
}
