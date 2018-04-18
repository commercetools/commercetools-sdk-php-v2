<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetDeleteDaysAfterLastModificationActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetDeleteDaysAfterLastModificationAction
     */
    public function at($index);

    /**
     * @return CartSetDeleteDaysAfterLastModificationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetDeleteDaysAfterLastModificationAction
     */
    public function map($data, $index);
}
