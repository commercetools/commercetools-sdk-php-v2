<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodChangeTaxCategoryActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @param $index
     * @return ShippingMethodChangeTaxCategoryAction
     */
    public function at($index);

    /**
     * @return ShippingMethodChangeTaxCategoryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodChangeTaxCategoryAction
     */
    public function map($data, $index);
}
