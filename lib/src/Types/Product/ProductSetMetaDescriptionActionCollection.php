<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetMetaDescriptionActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetMetaDescriptionAction
     */
    public function at($index);

    /**
     * @return ProductSetMetaDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetMetaDescriptionAction
     */
    public function map($data, $index);
}
