<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountChangeNameActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductDiscountChangeNameAction
     */
    public function at($index);

    /**
     * @return ProductDiscountChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountChangeNameAction
     */
    public function map($data, $index);
}
