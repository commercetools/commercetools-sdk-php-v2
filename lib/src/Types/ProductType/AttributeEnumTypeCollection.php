<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeEnumTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeEnumType
     */
    public function at($index);

    /**
     * @return AttributeEnumType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeEnumType
     */
    public function map($data, $index);
}
