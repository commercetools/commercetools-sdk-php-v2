<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateActionCollection;


interface ProductTypeUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeUpdateAction
     */
    public function at($index);

    /**
     * @return ProductTypeUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeUpdateAction
     */
    public function map($data, $index);
}
