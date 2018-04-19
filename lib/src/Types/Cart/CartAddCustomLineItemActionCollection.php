<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartAddCustomLineItemActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartAddCustomLineItemAction
     */
    public function at($index);

    /**
     * @return CartAddCustomLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartAddCustomLineItemAction
     */
    public function map($data, $index);
}
