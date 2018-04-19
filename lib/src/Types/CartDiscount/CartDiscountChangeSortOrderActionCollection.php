<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeSortOrderActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountChangeSortOrderAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeSortOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeSortOrderAction
     */
    public function map($data, $index);
}
