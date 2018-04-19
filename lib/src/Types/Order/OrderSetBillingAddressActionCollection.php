<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetBillingAddressActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetBillingAddressAction
     */
    public function at($index);

    /**
     * @return OrderSetBillingAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetBillingAddressAction
     */
    public function map($data, $index);
}
