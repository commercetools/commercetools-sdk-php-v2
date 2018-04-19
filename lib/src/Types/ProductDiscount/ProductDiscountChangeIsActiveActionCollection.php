<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountChangeIsActiveActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductDiscountChangeIsActiveAction
     */
    public function at($index);

    /**
     * @return ProductDiscountChangeIsActiveAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountChangeIsActiveAction
     */
    public function map($data, $index);
}
