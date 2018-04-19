<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetCategoryOrderHintActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetCategoryOrderHintAction
     */
    public function at($index);

    /**
     * @return ProductSetCategoryOrderHintAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetCategoryOrderHintAction
     */
    public function map($data, $index);
}
