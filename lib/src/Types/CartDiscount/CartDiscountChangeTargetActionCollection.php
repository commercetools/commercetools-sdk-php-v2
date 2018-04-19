<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeTargetActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountChangeTargetAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeTargetAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeTargetAction
     */
    public function map($data, $index);
}
