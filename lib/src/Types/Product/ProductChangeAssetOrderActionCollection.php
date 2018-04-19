<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductChangeAssetOrderActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductChangeAssetOrderAction
     */
    public function at($index);

    /**
     * @return ProductChangeAssetOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductChangeAssetOrderAction
     */
    public function map($data, $index);
}
