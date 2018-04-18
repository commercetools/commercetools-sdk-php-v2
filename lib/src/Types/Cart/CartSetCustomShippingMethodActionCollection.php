<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomShippingMethodActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCustomShippingMethodAction
     */
    public function at($index);

    /**
     * @return CartSetCustomShippingMethodAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomShippingMethodAction
     */
    public function map($data, $index);
}
