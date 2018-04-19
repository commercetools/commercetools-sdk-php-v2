<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangePlainEnumValueOrderActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangePlainEnumValueOrderAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangePlainEnumValueOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangePlainEnumValueOrderAction
     */
    public function map($data, $index);
}
