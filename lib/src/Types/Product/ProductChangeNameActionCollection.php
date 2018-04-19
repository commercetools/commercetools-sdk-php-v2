<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductChangeNameActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductChangeNameAction
     */
    public function at($index);

    /**
     * @return ProductChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductChangeNameAction
     */
    public function map($data, $index);
}
