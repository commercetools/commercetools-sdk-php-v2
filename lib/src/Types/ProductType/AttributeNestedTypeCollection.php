<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeNestedTypeCollection extends AttributeTypeCollection
{
    /**
     * @param $index
     * @return AttributeNestedType
     */
    public function at($index);

    /**
     * @return AttributeNestedType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeNestedType
     */
    public function map($data, $index);
}
