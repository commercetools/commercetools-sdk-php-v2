<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetCustomLineItemCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetCustomLineItemCustomTypeAction
     */
    public function at($index);

    /**
     * @return OrderSetCustomLineItemCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetCustomLineItemCustomTypeAction
     */
    public function map($data, $index);
}
