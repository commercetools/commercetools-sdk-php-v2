<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeRemoveEnumValuesActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeRemoveEnumValuesAction
     */
    public function at($index);

    /**
     * @return ProductTypeRemoveEnumValuesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeRemoveEnumValuesAction
     */
    public function map($data, $index);
}
