<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeLocalizableTextTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeLocalizableTextType
     */
    public function at($index);

    /**
     * @return AttributeLocalizableTextType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeLocalizableTextType
     */
    public function map($data, $index);
}
