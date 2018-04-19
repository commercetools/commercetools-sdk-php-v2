<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductLegacySetSkuActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductLegacySetSkuAction
     */
    public function at($index);

    /**
     * @return ProductLegacySetSkuAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductLegacySetSkuAction
     */
    public function map($data, $index);
}
