<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductChangePriceActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductChangePriceAction
     */
    public function at($index);

    /**
     * @return ProductChangePriceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductChangePriceAction
     */
    public function map($data, $index);
}
