<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductAddAssetActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductAddAssetAction
     */
    public function at($index);

    /**
     * @return ProductAddAssetAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductAddAssetAction
     */
    public function map($data, $index);
}
