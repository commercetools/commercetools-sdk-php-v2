<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\ResourceCollection;


interface OrderCollection extends ResourceCollection {
    /**
     * @param $index
     * @return Order
     */
    public function at($index);

    /**
     * @return Order
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Order
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Order
     */
    public function byId($id);
}
