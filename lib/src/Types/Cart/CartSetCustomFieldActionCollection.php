<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomFieldActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return CartSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomFieldAction
     */
    public function map($data, $index);
}
