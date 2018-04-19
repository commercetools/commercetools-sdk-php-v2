<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductRemoveAssetActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductRemoveAssetAction
     */
    public function at($index);

    /**
     * @return ProductRemoveAssetAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRemoveAssetAction
     */
    public function map($data, $index);
}
