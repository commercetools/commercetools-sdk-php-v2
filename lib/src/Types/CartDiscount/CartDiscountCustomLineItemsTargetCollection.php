<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollection;


interface CartDiscountCustomLineItemsTargetCollection extends CartDiscountTargetCollection {
    /**
     * @param $index
     * @return CartDiscountCustomLineItemsTarget
     */
    public function at($index);

    /**
     * @return CartDiscountCustomLineItemsTarget
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountCustomLineItemsTarget
     */
    public function map($data, $index);
}
