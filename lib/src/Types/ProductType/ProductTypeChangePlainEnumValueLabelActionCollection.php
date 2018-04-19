<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangePlainEnumValueLabelActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangePlainEnumValueLabelAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangePlainEnumValueLabelAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangePlainEnumValueLabelAction
     */
    public function map($data, $index);
}
