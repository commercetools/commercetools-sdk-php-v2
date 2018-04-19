<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ZoneRateCollection extends Collection
{
    /**
     * @param $index
     * @return ZoneRate
     */
    public function at($index);

    /**
     * @return ZoneRate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneRate
     */
    public function map($data, $index);
}
