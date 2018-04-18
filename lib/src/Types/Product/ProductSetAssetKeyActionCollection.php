<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAssetKeyActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetAssetKeyAction
     */
    public function at($index);

    /**
     * @return ProductSetAssetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAssetKeyAction
     */
    public function map($data, $index);
}
