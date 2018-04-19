<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderAddParcelToDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderAddParcelToDeliveryAction
     */
    public function at($index);

    /**
     * @return OrderAddParcelToDeliveryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderAddParcelToDeliveryAction
     */
    public function map($data, $index);
}
