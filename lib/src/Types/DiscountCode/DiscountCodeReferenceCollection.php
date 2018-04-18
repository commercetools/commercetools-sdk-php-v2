<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\Common\ReferenceCollection;


interface DiscountCodeReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return DiscountCodeReference
     */
    public function at($index);

    /**
     * @return DiscountCodeReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeReference
     */
    public function map($data, $index);
}
