<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductAddVariantActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductAddVariantAction
     */
    public function at($index);

    /**
     * @return ProductAddVariantAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductAddVariantAction
     */
    public function map($data, $index);
}
