<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountValueCollection;


interface ProductDiscountValueExternalCollection extends ProductDiscountValueCollection
{
    /**
     * @param $index
     * @return ProductDiscountValueExternal
     */
    public function at($index);

    /**
     * @return ProductDiscountValueExternal
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountValueExternal
     */
    public function map($data, $index);
}
