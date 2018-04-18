<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountSetValidUntilActionCollection extends CartDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return CartDiscountSetValidUntilAction
     */
    public function at($index);

    /**
     * @return CartDiscountSetValidUntilAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountSetValidUntilAction
     */
    public function map($data, $index);
}
