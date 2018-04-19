<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomLineItemCustomTypeActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetCustomLineItemCustomTypeAction
     */
    public function at($index);

    /**
     * @return CartSetCustomLineItemCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomLineItemCustomTypeAction
     */
    public function map($data, $index);
}
