<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\ReferenceCollection;


interface CartReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return CartReference
     */
    public function at($index);

    /**
     * @return CartReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartReference
     */
    public function map($data, $index);
}
