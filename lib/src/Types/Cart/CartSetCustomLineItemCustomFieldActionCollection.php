<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomLineItemCustomFieldActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCustomLineItemCustomFieldAction
     */
    public function at($index);

    /**
     * @return CartSetCustomLineItemCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomLineItemCustomFieldAction
     */
    public function map($data, $index);
}
