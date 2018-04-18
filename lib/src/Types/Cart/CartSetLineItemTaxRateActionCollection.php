<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetLineItemTaxRateActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetLineItemTaxRateAction
     */
    public function at($index);

    /**
     * @return CartSetLineItemTaxRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetLineItemTaxRateAction
     */
    public function map($data, $index);
}
