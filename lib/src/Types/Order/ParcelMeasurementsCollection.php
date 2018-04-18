<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface ParcelMeasurementsCollection extends Collection {
    /**
     * @param $index
     * @return ParcelMeasurements
     */
    public function at($index);

    /**
     * @return ParcelMeasurements
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ParcelMeasurements
     */
    public function map($data, $index);
}
