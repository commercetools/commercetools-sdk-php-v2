<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetShippingMethodTaxAmountActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetShippingMethodTaxAmountAction
     */
    public function at($index);

    /**
     * @return CartSetShippingMethodTaxAmountAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetShippingMethodTaxAmountAction
     */
    public function map($data, $index);
}
