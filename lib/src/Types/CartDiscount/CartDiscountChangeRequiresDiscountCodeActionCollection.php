<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountChangeRequiresDiscountCodeActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountChangeRequiresDiscountCodeAction
     */
    public function at($index);

    /**
     * @return CartDiscountChangeRequiresDiscountCodeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountChangeRequiresDiscountCodeAction
     */
    public function map($data, $index);
}
