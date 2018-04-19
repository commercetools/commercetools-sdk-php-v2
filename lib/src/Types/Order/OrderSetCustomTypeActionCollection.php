<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return OrderSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetCustomTypeAction
     */
    public function map($data, $index);
}
