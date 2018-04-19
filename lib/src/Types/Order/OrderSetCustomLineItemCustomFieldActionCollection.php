<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetCustomLineItemCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetCustomLineItemCustomFieldAction
     */
    public function at($index);

    /**
     * @return OrderSetCustomLineItemCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetCustomLineItemCustomFieldAction
     */
    public function map($data, $index);
}
