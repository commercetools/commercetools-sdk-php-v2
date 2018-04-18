<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderTransitionCustomLineItemStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderTransitionCustomLineItemStateAction
     */
    public function at($index);

    /**
     * @return OrderTransitionCustomLineItemStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderTransitionCustomLineItemStateAction
     */
    public function map($data, $index);
}
