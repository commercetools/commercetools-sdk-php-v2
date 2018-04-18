<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomLineItemTaxRateActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCustomLineItemTaxRateAction
     */
    public function at($index);

    /**
     * @return CartSetCustomLineItemTaxRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomLineItemTaxRateAction
     */
    public function map($data, $index);
}
