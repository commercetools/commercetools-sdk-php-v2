<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductRemoveFromCategoryActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductRemoveFromCategoryAction
     */
    public function at($index);

    /**
     * @return ProductRemoveFromCategoryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRemoveFromCategoryAction
     */
    public function map($data, $index);
}
