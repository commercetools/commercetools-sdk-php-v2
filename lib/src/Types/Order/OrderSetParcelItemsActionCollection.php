<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetParcelItemsActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetParcelItemsAction
     */
    public function at($index);

    /**
     * @return OrderSetParcelItemsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetParcelItemsAction
     */
    public function map($data, $index);
}
