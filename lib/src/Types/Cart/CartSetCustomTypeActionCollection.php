<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomTypeActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return CartSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomTypeAction
     */
    public function map($data, $index);
}
