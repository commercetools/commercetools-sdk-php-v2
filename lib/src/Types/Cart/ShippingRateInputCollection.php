<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ShippingRateInputCollection extends Collection
{
    /**
     * @param $index
     * @return ShippingRateInput
     */
    public function at($index);

    /**
     * @return ShippingRateInput
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingRateInput
     */
    public function map($data, $index);
}
