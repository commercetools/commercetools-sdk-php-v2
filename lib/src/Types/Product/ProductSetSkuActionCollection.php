<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetSkuActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetSkuAction
     */
    public function at($index);

    /**
     * @return ProductSetSkuAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetSkuAction
     */
    public function map($data, $index);
}
