<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetTaxCategoryActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetTaxCategoryAction
     */
    public function at($index);

    /**
     * @return ProductSetTaxCategoryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetTaxCategoryAction
     */
    public function map($data, $index);
}
