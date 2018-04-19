<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\Common\ReferenceCollection;


interface CartDiscountReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return CartDiscountReference
     */
    public function at($index);

    /**
     * @return CartDiscountReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountReference
     */
    public function map($data, $index);
}
