<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartChangeLineItemQuantityActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartChangeLineItemQuantityAction
     */
    public function at($index);

    /**
     * @return CartChangeLineItemQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartChangeLineItemQuantityAction
     */
    public function map($data, $index);
}
