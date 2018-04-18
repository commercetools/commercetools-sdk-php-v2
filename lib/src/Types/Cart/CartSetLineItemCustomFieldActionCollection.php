<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetLineItemCustomFieldActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetLineItemCustomFieldAction
     */
    public function at($index);

    /**
     * @return CartSetLineItemCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetLineItemCustomFieldAction
     */
    public function map($data, $index);
}
