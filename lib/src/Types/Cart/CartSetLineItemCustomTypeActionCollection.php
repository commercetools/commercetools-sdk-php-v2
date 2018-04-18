<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetLineItemCustomTypeActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetLineItemCustomTypeAction
     */
    public function at($index);

    /**
     * @return CartSetLineItemCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetLineItemCustomTypeAction
     */
    public function map($data, $index);
}
