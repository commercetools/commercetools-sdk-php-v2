<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderTransitionStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderTransitionStateAction
     */
    public function at($index);

    /**
     * @return OrderTransitionStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderTransitionStateAction
     */
    public function map($data, $index);
}
