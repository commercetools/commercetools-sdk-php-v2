<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAssetSourcesActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetAssetSourcesAction
     */
    public function at($index);

    /**
     * @return ProductSetAssetSourcesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAssetSourcesAction
     */
    public function map($data, $index);
}
