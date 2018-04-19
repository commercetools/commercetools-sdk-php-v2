<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductRemoveImageActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductRemoveImageAction
     */
    public function at($index);

    /**
     * @return ProductRemoveImageAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRemoveImageAction
     */
    public function map($data, $index);
}
