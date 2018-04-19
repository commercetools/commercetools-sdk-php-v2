<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductRemovePriceActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductRemovePriceAction
     */
    public function at($index);

    /**
     * @return ProductRemovePriceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRemovePriceAction
     */
    public function map($data, $index);
}
