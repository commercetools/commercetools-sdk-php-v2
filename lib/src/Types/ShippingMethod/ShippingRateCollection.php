<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ShippingRateCollection extends Collection {
    /**
     * @param $index
     * @return ShippingRate
     */
    public function at($index);

    /**
     * @return ShippingRate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingRate
     */
    public function map($data, $index);
}
