<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderTransitionLineItemStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderTransitionLineItemStateAction
     */
    public function at($index);

    /**
     * @return OrderTransitionLineItemStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderTransitionLineItemStateAction
     */
    public function map($data, $index);
}
