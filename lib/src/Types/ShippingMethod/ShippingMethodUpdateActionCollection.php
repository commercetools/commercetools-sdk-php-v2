<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ShippingMethodUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return ShippingMethodUpdateAction
     */
    public function at($index);

    /**
     * @return ShippingMethodUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodUpdateAction
     */
    public function map($data, $index);
}
