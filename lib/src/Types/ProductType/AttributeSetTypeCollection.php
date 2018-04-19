<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeSetTypeCollection extends AttributeTypeCollection
{
    /**
     * @param $index
     * @return AttributeSetType
     */
    public function at($index);

    /**
     * @return AttributeSetType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeSetType
     */
    public function map($data, $index);
}
