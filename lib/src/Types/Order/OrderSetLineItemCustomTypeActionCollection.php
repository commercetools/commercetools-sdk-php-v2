<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetLineItemCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetLineItemCustomTypeAction
     */
    public function at($index);

    /**
     * @return OrderSetLineItemCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetLineItemCustomTypeAction
     */
    public function map($data, $index);
}
