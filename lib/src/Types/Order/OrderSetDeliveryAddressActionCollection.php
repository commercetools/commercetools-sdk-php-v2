<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetDeliveryAddressActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderSetDeliveryAddressAction
     */
    public function at($index);

    /**
     * @return OrderSetDeliveryAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetDeliveryAddressAction
     */
    public function map($data, $index);
}
