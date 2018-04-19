<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface DeliveryCollection extends Collection
{
    /**
     * @param $index
     * @return Delivery
     */
    public function at($index);

    /**
     * @return Delivery
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Delivery
     */
    public function map($data, $index);
}
