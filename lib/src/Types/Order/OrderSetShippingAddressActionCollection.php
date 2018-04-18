<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetShippingAddressActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderSetShippingAddressAction
     */
    public function at($index);

    /**
     * @return OrderSetShippingAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetShippingAddressAction
     */
    public function map($data, $index);
}
