<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetMetaTitleActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetMetaTitleAction
     */
    public function at($index);

    /**
     * @return ProductSetMetaTitleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetMetaTitleAction
     */
    public function map($data, $index);
}
