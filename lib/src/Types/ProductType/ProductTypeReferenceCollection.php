<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\Common\ReferenceCollection;


interface ProductTypeReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return ProductTypeReference
     */
    public function at($index);

    /**
     * @return ProductTypeReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeReference
     */
    public function map($data, $index);
}
