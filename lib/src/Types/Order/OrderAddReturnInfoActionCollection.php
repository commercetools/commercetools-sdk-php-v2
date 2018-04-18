<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderAddReturnInfoActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderAddReturnInfoAction
     */
    public function at($index);

    /**
     * @return OrderAddReturnInfoAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderAddReturnInfoAction
     */
    public function map($data, $index);
}
