<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface ReturnItemCollection extends Collection
{
    /**
     * @param $index
     * @return ReturnItem
     */
    public function at($index);

    /**
     * @return ReturnItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReturnItem
     */
    public function map($data, $index);
}
