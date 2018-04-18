<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeNameActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeChangeNameAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeNameAction
     */
    public function map($data, $index);
}
