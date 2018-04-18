<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeStackingModeActionCollection extends CartDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return CartDiscountChangeStackingModeAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeStackingModeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeStackingModeAction
     */
    public function map($data, $index);
}
