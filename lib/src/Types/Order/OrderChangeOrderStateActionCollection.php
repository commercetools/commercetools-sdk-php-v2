<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderChangeOrderStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderChangeOrderStateAction
     */
    public function at($index);

    /**
     * @return OrderChangeOrderStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderChangeOrderStateAction
     */
    public function map($data, $index);
}
