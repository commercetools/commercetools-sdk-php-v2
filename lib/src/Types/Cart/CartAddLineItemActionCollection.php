<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartAddLineItemActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartAddLineItemAction
     */
    public function at($index);

    /**
     * @return CartAddLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartAddLineItemAction
     */
    public function map($data, $index);
}
