<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetProductPriceCustomTypeActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetProductPriceCustomTypeAction
     */
    public function at($index);

    /**
     * @return ProductSetProductPriceCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetProductPriceCustomTypeAction
     */
    public function map($data, $index);
}
