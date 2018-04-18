<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetProductPriceCustomFieldActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetProductPriceCustomFieldAction
     */
    public function at($index);

    /**
     * @return ProductSetProductPriceCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetProductPriceCustomFieldAction
     */
    public function map($data, $index);
}
