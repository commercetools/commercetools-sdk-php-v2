<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeChangeIsActiveActionCollection extends DiscountCodeUpdateActionCollection {
    /**
     * @param $index
     * @return DiscountCodeChangeIsActiveAction
     */
    public function at($index);

    /**
     * @return DiscountCodeChangeIsActiveAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeChangeIsActiveAction
     */
    public function map($data, $index);
}
