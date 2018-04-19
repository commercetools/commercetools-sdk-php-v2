<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateCollection;


interface ProductTypeUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return ProductTypeUpdate
     */
    public function at($index);

    /**
     * @return ProductTypeUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeUpdate
     */
    public function map($data, $index);
}
