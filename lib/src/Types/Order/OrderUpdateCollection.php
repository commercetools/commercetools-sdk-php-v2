<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateCollection;


interface OrderUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return OrderUpdate
     */
    public function at($index);

    /**
     * @return OrderUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderUpdate
     */
    public function map($data, $index);
}
