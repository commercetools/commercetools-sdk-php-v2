<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface ParcelCollection extends Collection {
    /**
     * @param $index
     * @return Parcel
     */
    public function at($index);

    /**
     * @return Parcel
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Parcel
     */
    public function map($data, $index);
}
