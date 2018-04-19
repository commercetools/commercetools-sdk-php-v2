<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ReferenceCollection;


interface ProductReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return ProductReference
     */
    public function at($index);

    /**
     * @return ProductReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductReference
     */
    public function map($data, $index);
}
