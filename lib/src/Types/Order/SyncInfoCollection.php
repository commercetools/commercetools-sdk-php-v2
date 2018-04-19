<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface SyncInfoCollection extends Collection
{
    /**
     * @param $index
     * @return SyncInfo
     */
    public function at($index);

    /**
     * @return SyncInfo
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SyncInfo
     */
    public function map($data, $index);
}
