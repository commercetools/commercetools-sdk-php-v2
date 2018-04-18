<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartChangeTaxModeActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartChangeTaxModeAction
     */
    public function at($index);

    /**
     * @return CartChangeTaxModeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartChangeTaxModeAction
     */
    public function map($data, $index);
}
