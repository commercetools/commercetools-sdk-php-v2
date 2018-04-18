<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\ReferenceCollection;


interface ShippingMethodReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return ShippingMethodReference
     */
    public function at($index);

    /**
     * @return ShippingMethodReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodReference
     */
    public function map($data, $index);
}
