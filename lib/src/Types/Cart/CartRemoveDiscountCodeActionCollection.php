<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartRemoveDiscountCodeActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartRemoveDiscountCodeAction
     */
    public function at($index);

    /**
     * @return CartRemoveDiscountCodeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartRemoveDiscountCodeAction
     */
    public function map($data, $index);
}
