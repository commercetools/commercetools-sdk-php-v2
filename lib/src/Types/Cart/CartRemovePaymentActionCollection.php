<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartRemovePaymentActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartRemovePaymentAction
     */
    public function at($index);

    /**
     * @return CartRemovePaymentAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartRemovePaymentAction
     */
    public function map($data, $index);
}
