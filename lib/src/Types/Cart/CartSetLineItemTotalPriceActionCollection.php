<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetLineItemTotalPriceActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetLineItemTotalPriceAction
     */
    public function at($index);

    /**
     * @return CartSetLineItemTotalPriceAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetLineItemTotalPriceAction
     */
    public function map($data, $index);
}
