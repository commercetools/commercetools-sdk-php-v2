<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateActionCollection;


interface OrderUpdateActionCollection extends UpdateActionCollection
{
    /**
     * @param $index
     * @return OrderUpdateAction
     */
    public function at($index);

    /**
     * @return OrderUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderUpdateAction
     */
    public function map($data, $index);
}
