<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductAddToCategoryActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductAddToCategoryAction
     */
    public function at($index);

    /**
     * @return ProductAddToCategoryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductAddToCategoryAction
     */
    public function map($data, $index);
}
