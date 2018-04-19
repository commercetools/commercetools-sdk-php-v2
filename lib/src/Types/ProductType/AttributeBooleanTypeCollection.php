<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeBooleanTypeCollection extends AttributeTypeCollection
{
    /**
     * @param $index
     * @return AttributeBooleanType
     */
    public function at($index);

    /**
     * @return AttributeBooleanType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeBooleanType
     */
    public function map($data, $index);
}
