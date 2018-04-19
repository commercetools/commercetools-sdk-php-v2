<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeIsActiveActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountChangeIsActiveAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeIsActiveAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeIsActiveAction
     */
    public function map($data, $index);
}
