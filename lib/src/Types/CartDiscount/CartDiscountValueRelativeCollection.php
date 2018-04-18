<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountValueCollection;


interface CartDiscountValueRelativeCollection extends CartDiscountValueCollection {
    /**
     * @param $index
     * @return CartDiscountValueRelative
     */
    public function at($index);

    /**
     * @return CartDiscountValueRelative
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountValueRelative
     */
    public function map($data, $index);
}
