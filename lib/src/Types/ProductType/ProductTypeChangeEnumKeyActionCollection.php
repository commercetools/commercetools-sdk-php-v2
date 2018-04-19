<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeEnumKeyActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeEnumKeyAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeEnumKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeEnumKeyAction
     */
    public function map($data, $index);
}
