<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetDeliveryItemsActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderSetDeliveryItemsAction
     */
    public function at($index);

    /**
     * @return OrderSetDeliveryItemsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetDeliveryItemsAction
     */
    public function map($data, $index);
}
