<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountSetCustomFieldActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return CartDiscountSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountSetCustomFieldAction
     */
    public function map($data, $index);
}
