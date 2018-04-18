<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomerGroupActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCustomerGroupAction
     */
    public function at($index);

    /**
     * @return CartSetCustomerGroupAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomerGroupAction
     */
    public function map($data, $index);
}
