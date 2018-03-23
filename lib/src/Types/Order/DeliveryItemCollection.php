<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface DeliveryItemCollection extends Collection {
    /**
     * @param $index
     * @return DeliveryItem
     */
    public function at($index);

    /**
     * @return DeliveryItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DeliveryItem
     */
    public function map($data, $index);
}
