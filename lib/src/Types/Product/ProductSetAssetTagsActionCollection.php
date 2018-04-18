<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAssetTagsActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetAssetTagsAction
     */
    public function at($index);

    /**
     * @return ProductSetAssetTagsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAssetTagsAction
     */
    public function map($data, $index);
}
