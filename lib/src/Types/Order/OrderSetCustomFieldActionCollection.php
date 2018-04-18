<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetCustomFieldActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return OrderSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetCustomFieldAction
     */
    public function map($data, $index);
}
