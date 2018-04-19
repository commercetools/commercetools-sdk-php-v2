<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartChangeCustomLineItemQuantityActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartChangeCustomLineItemQuantityAction
     */
    public function at($index);

    /**
     * @return CartChangeCustomLineItemQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartChangeCustomLineItemQuantityAction
     */
    public function map($data, $index);
}
