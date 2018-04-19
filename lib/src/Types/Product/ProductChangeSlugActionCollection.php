<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductChangeSlugActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductChangeSlugAction
     */
    public function at($index);

    /**
     * @return ProductChangeSlugAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductChangeSlugAction
     */
    public function map($data, $index);
}
