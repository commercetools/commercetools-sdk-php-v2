<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductChangeAssetNameActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductChangeAssetNameAction
     */
    public function at($index);

    /**
     * @return ProductChangeAssetNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductChangeAssetNameAction
     */
    public function map($data, $index);
}
