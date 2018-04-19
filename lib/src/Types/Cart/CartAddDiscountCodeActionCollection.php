<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartAddDiscountCodeActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartAddDiscountCodeAction
     */
    public function at($index);

    /**
     * @return CartAddDiscountCodeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartAddDiscountCodeAction
     */
    public function map($data, $index);
}
