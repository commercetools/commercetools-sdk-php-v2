<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetValidUntilActionCollection extends DiscountCodeUpdateActionCollection {
    /**
     * @param $index
     * @return DiscountCodeSetValidUntilAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetValidUntilAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetValidUntilAction
     */
    public function map($data, $index);
}
