<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetReturnShipmentStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderSetReturnShipmentStateAction
     */
    public function at($index);

    /**
     * @return OrderSetReturnShipmentStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetReturnShipmentStateAction
     */
    public function map($data, $index);
}
