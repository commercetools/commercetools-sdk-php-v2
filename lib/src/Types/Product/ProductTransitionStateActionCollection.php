<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductTransitionStateActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTransitionStateAction
     */
    public function at($index);

    /**
     * @return ProductTransitionStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTransitionStateAction
     */
    public function map($data, $index);
}
