<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAttributeActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductSetAttributeAction
     */
    public function at($index);

    /**
     * @return ProductSetAttributeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAttributeAction
     */
    public function map($data, $index);
}
