<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateCollection;


interface ProductUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return ProductUpdate
     */
    public function at($index);

    /**
     * @return ProductUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductUpdate
     */
    public function map($data, $index);
}
