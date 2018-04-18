<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetDescriptionActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetDescriptionAction
     */
    public function at($index);

    /**
     * @return ProductSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetDescriptionAction
     */
    public function map($data, $index);
}
