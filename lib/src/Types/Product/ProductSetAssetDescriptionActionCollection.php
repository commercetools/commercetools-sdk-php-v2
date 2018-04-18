<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAssetDescriptionActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetAssetDescriptionAction
     */
    public function at($index);

    /**
     * @return ProductSetAssetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAssetDescriptionAction
     */
    public function map($data, $index);
}
