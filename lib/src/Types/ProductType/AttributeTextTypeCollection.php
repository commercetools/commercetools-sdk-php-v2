<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeTextTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeTextType
     */
    public function at($index);

    /**
     * @return AttributeTextType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeTextType
     */
    public function map($data, $index);
}
