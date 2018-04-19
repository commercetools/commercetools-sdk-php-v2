<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeAttributeConstraintActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeAttributeConstraintAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeAttributeConstraintAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeAttributeConstraintAction
     */
    public function map($data, $index);
}
