<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetParcelTrackingDataActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetParcelTrackingDataAction
     */
    public function at($index);

    /**
     * @return OrderSetParcelTrackingDataAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetParcelTrackingDataAction
     */
    public function map($data, $index);
}
