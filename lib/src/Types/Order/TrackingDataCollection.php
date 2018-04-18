<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface TrackingDataCollection extends Collection {
    /**
     * @param $index
     * @return TrackingData
     */
    public function at($index);

    /**
     * @return TrackingData
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TrackingData
     */
    public function map($data, $index);
}
