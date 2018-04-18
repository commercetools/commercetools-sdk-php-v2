<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartAddPaymentActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartAddPaymentAction
     */
    public function at($index);

    /**
     * @return CartAddPaymentAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartAddPaymentAction
     */
    public function map($data, $index);
}
