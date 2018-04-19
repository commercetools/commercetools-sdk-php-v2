<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeCartPredicateActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountChangeCartPredicateAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeCartPredicateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeCartPredicateAction
     */
    public function map($data, $index);
}
