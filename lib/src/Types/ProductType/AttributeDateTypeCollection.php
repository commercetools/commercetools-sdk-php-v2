<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeDateTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeDateType
     */
    public function at($index);

    /**
     * @return AttributeDateType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeDateType
     */
    public function map($data, $index);
}
