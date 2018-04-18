<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomerIdActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCustomerIdAction
     */
    public function at($index);

    /**
     * @return CartSetCustomerIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomerIdAction
     */
    public function map($data, $index);
}
