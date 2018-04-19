<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartRemoveLineItemActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartRemoveLineItemAction
     */
    public function at($index);

    /**
     * @return CartRemoveLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartRemoveLineItemAction
     */
    public function map($data, $index);
}
