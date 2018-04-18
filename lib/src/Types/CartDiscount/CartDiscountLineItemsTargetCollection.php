<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollection;


interface CartDiscountLineItemsTargetCollection extends CartDiscountTargetCollection {
    /**
     * @param $index
     * @return CartDiscountLineItemsTarget
     */
    public function at($index);

    /**
     * @return CartDiscountLineItemsTarget
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountLineItemsTarget
     */
    public function map($data, $index);
}
