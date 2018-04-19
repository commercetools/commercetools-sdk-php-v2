<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAssetCustomFieldActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetAssetCustomFieldAction
     */
    public function at($index);

    /**
     * @return ProductSetAssetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAssetCustomFieldAction
     */
    public function map($data, $index);
}
