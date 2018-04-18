<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartRemoveCustomLineItemActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartRemoveCustomLineItemAction
     */
    public function at($index);

    /**
     * @return CartRemoveCustomLineItemAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartRemoveCustomLineItemAction
     */
    public function map($data, $index);
}
