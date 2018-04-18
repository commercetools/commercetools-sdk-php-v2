<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCartTotalTaxActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCartTotalTaxAction
     */
    public function at($index);

    /**
     * @return CartSetCartTotalTaxAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCartTotalTaxAction
     */
    public function map($data, $index);
}
