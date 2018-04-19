<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeAttributeNameActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeAttributeNameAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeAttributeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeAttributeNameAction
     */
    public function map($data, $index);
}
