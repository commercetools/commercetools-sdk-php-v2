<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeSetKeyActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeSetKeyAction
     */
    public function at($index);

    /**
     * @return ProductTypeSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeSetKeyAction
     */
    public function map($data, $index);
}
