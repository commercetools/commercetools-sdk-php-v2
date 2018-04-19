<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductAddExternalImageActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductAddExternalImageAction
     */
    public function at($index);

    /**
     * @return ProductAddExternalImageAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductAddExternalImageAction
     */
    public function map($data, $index);
}
