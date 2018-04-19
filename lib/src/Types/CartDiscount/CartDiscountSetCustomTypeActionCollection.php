<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountSetCustomTypeActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return CartDiscountSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountSetCustomTypeAction
     */
    public function map($data, $index);
}
