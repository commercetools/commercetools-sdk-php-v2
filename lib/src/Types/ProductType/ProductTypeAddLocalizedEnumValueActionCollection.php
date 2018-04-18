<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeAddLocalizedEnumValueActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeAddLocalizedEnumValueAction
     */
    public function at($index);

    /**
     * @return ProductTypeAddLocalizedEnumValueAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeAddLocalizedEnumValueAction
     */
    public function map($data, $index);
}
