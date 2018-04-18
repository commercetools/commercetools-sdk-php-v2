<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeLabelActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeChangeLabelAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeLabelAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeLabelAction
     */
    public function map($data, $index);
}
