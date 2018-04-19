<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeDateTimeTypeCollection extends AttributeTypeCollection
{
    /**
     * @param $index
     * @return AttributeDateTimeType
     */
    public function at($index);

    /**
     * @return AttributeDateTimeType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeDateTimeType
     */
    public function map($data, $index);
}
