<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\UpdateActionCollection;


interface CartUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return CartUpdateAction
     */
    public function at($index);

    /**
     * @return CartUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartUpdateAction
     */
    public function map($data, $index);
}
