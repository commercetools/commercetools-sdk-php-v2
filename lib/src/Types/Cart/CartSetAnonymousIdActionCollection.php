<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetAnonymousIdActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetAnonymousIdAction
     */
    public function at($index);

    /**
     * @return CartSetAnonymousIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetAnonymousIdAction
     */
    public function map($data, $index);
}
