<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface ItemStateCollection extends Collection {
    /**
     * @param $index
     * @return ItemState
     */
    public function at($index);

    /**
     * @return ItemState
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ItemState
     */
    public function map($data, $index);
}
