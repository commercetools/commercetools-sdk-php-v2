<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodSetPredicateActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodSetPredicateAction
     */
    public function at($index);

    /**
     * @return ShippingMethodSetPredicateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodSetPredicateAction
     */
    public function map($data, $index);
}
