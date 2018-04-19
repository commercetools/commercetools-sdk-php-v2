<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\UpdateCollection;


interface CartUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return CartUpdate
     */
    public function at($index);

    /**
     * @return CartUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartUpdate
     */
    public function map($data, $index);
}
