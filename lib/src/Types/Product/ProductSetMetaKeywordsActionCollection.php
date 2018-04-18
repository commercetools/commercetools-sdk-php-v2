<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetMetaKeywordsActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetMetaKeywordsAction
     */
    public function at($index);

    /**
     * @return ProductSetMetaKeywordsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetMetaKeywordsAction
     */
    public function map($data, $index);
}
