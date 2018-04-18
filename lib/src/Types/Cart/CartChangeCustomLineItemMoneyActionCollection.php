<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartChangeCustomLineItemMoneyActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartChangeCustomLineItemMoneyAction
     */
    public function at($index);

    /**
     * @return CartChangeCustomLineItemMoneyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartChangeCustomLineItemMoneyAction
     */
    public function map($data, $index);
}
