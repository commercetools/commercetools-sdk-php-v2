<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetProductVariantKeyActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetProductVariantKeyAction
     */
    public function at($index);

    /**
     * @return ProductSetProductVariantKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetProductVariantKeyAction
     */
    public function map($data, $index);
}
