<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductAddPriceActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductAddPriceAction
     */
    public function at($index);

    /**
     * @return ProductAddPriceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductAddPriceAction
     */
    public function map($data, $index);
}
