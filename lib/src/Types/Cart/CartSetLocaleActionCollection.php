<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetLocaleActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetLocaleAction
     */
    public function at($index);

    /**
     * @return CartSetLocaleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetLocaleAction
     */
    public function map($data, $index);
}
