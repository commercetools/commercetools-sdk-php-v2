<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeNumberTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeNumberType
     */
    public function at($index);

    /**
     * @return AttributeNumberType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeNumberType
     */
    public function map($data, $index);
}
