<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartAddShoppingListActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartAddShoppingListAction
     */
    public function at($index);

    /**
     * @return CartAddShoppingListAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartAddShoppingListAction
     */
    public function map($data, $index);
}
