<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeNameActionCollection extends CartDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return CartDiscountChangeNameAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeNameAction
     */
    public function map($data, $index);
}
