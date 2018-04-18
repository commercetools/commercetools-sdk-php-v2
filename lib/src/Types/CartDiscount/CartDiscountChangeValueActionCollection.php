<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeValueActionCollection extends CartDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return CartDiscountChangeValueAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeValueAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeValueAction
     */
    public function map($data, $index);
}
