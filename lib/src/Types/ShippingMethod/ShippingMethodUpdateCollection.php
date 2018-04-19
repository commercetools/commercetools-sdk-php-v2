<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateCollection;


interface ShippingMethodUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return ShippingMethodUpdate
     */
    public function at($index);

    /**
     * @return ShippingMethodUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodUpdate
     */
    public function map($data, $index);
}
