<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountValueCollection;


interface CartDiscountValueAbsoluteCollection extends CartDiscountValueCollection
{
    /**
     * @param $index
     * @return CartDiscountValueAbsolute
     */
    public function at($index);

    /**
     * @return CartDiscountValueAbsolute
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountValueAbsolute
     */
    public function map($data, $index);
}
