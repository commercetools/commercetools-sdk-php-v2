<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface PriceFunctionCollection extends Collection
{
    /**
     * @param $index
     * @return PriceFunction
     */
    public function at($index);

    /**
     * @return PriceFunction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PriceFunction
     */
    public function map($data, $index);
}
