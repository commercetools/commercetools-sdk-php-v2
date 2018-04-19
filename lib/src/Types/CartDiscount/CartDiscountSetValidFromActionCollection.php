<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountSetValidFromActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountSetValidFromAction
     */
    public function at($index);

    /**
     * @return CartDiscountSetValidFromAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountSetValidFromAction
     */
    public function map($data, $index);
}
