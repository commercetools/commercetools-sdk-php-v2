<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeMoneyTypeCollection extends AttributeTypeCollection {
    /**
     * @param $index
     * @return AttributeMoneyType
     */
    public function at($index);

    /**
     * @return AttributeMoneyType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeMoneyType
     */
    public function map($data, $index);
}
