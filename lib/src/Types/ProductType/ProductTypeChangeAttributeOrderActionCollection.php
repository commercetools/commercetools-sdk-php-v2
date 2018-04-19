<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeAttributeOrderActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeAttributeOrderAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeAttributeOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeAttributeOrderAction
     */
    public function map($data, $index);
}
