<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetOrderNumberActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetOrderNumberAction
     */
    public function at($index);

    /**
     * @return OrderSetOrderNumberAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetOrderNumberAction
     */
    public function map($data, $index);
}
