<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartRecalculateActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartRecalculateAction
     */
    public function at($index);

    /**
     * @return CartRecalculateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartRecalculateAction
     */
    public function map($data, $index);
}
