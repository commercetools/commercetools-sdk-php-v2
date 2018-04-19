<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetLocaleActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetLocaleAction
     */
    public function at($index);

    /**
     * @return OrderSetLocaleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetLocaleAction
     */
    public function map($data, $index);
}
