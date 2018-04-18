<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeReferenceTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeReferenceType
     */
    public function at($index);

    /**
     * @return AttributeReferenceType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeReferenceType
     */
    public function map($data, $index);
}
