<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeLocalizedEnumValueOrderActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeLocalizedEnumValueOrderAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeLocalizedEnumValueOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeLocalizedEnumValueOrderAction
     */
    public function map($data, $index);
}
