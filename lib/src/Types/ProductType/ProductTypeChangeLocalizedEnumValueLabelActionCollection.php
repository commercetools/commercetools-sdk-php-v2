<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeLocalizedEnumValueLabelActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeLocalizedEnumValueLabelAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeLocalizedEnumValueLabelAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeLocalizedEnumValueLabelAction
     */
    public function map($data, $index);
}
