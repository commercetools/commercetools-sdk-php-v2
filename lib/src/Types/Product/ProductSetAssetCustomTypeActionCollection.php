<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAssetCustomTypeActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetAssetCustomTypeAction
     */
    public function at($index);

    /**
     * @return ProductSetAssetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAssetCustomTypeAction
     */
    public function map($data, $index);
}
