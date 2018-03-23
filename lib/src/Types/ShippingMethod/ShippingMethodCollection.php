<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ShippingMethodCollection extends Collection {
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
     * @param $id
     * @return string
     */
    public function byId($id);
}
