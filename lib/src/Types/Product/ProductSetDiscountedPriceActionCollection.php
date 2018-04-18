<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetDiscountedPriceActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetDiscountedPriceAction
     */
    public function at($index);

    /**
     * @return ProductSetDiscountedPriceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetDiscountedPriceAction
     */
    public function map($data, $index);
}
