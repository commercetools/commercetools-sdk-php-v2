<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeAddPlainEnumValueActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeAddPlainEnumValueAction
     */
    public function at($index);

    /**
     * @return ProductTypeAddPlainEnumValueAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeAddPlainEnumValueAction
     */
    public function map($data, $index);
}
