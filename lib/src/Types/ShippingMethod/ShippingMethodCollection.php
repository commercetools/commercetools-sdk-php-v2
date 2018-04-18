<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\ResourceCollection;


interface ShippingMethodCollection extends ResourceCollection {
    /**
     * @param $index
     * @return ShippingMethod
     */
    public function at($index);

    /**
     * @return ShippingMethod
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethod
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return ShippingMethod
     */
    public function byId($id);
}
