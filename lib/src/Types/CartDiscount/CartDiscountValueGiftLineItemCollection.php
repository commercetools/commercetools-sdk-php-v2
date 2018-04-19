<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountValueCollection;


interface CartDiscountValueGiftLineItemCollection extends CartDiscountValueCollection
{
    /**
     * @param $index
     * @return CartDiscountValueGiftLineItem
     */
    public function at($index);

    /**
     * @return CartDiscountValueGiftLineItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountValueGiftLineItem
     */
    public function map($data, $index);
}
