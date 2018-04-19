<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetBillingAddressActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetBillingAddressAction
     */
    public function at($index);

    /**
     * @return CartSetBillingAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetBillingAddressAction
     */
    public function map($data, $index);
}
