<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetLineItemPriceActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetLineItemPriceAction
     */
    public function at($index);

    /**
     * @return CartSetLineItemPriceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetLineItemPriceAction
     */
    public function map($data, $index);
}
