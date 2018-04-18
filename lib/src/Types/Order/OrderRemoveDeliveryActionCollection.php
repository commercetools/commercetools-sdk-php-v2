<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderRemoveDeliveryActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderRemoveDeliveryAction
     */
    public function at($index);

    /**
     * @return OrderRemoveDeliveryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderRemoveDeliveryAction
     */
    public function map($data, $index);
}
