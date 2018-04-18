<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetLineItemCustomFieldActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderSetLineItemCustomFieldAction
     */
    public function at($index);

    /**
     * @return OrderSetLineItemCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetLineItemCustomFieldAction
     */
    public function map($data, $index);
}
