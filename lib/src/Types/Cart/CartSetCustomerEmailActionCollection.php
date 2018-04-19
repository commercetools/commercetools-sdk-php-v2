<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomerEmailActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetCustomerEmailAction
     */
    public function at($index);

    /**
     * @return CartSetCustomerEmailAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomerEmailAction
     */
    public function map($data, $index);
}
