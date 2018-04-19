<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface ReturnInfoCollection extends Collection
{
    /**
     * @param $index
     * @return ReturnInfo
     */
    public function at($index);

    /**
     * @return ReturnInfo
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReturnInfo
     */
    public function map($data, $index);
}
