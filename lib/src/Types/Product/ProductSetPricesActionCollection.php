<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetPricesActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetPricesAction
     */
    public function at($index);

    /**
     * @return ProductSetPricesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetPricesAction
     */
    public function map($data, $index);
}
