<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderRemoveParcelFromDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderRemoveParcelFromDeliveryAction
     */
    public function at($index);

    /**
     * @return OrderRemoveParcelFromDeliveryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderRemoveParcelFromDeliveryAction
     */
    public function map($data, $index);
}
