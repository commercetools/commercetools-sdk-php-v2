<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetNameActionCollection extends DiscountCodeUpdateActionCollection {
    /**
     * @param $index
     * @return DiscountCodeSetNameAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetNameAction
     */
    public function map($data, $index);
}
