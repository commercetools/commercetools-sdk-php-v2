<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ShippingInfoCollection extends Collection
{
    /**
     * @param $index
     * @return ShippingInfo
     */
    public function at($index);

    /**
     * @return ShippingInfo
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingInfo
     */
    public function map($data, $index);
}
