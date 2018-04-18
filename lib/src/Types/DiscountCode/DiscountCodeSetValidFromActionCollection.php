<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetValidFromActionCollection extends DiscountCodeUpdateActionCollection {
    /**
     * @param $index
     * @return DiscountCodeSetValidFromAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetValidFromAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetValidFromAction
     */
    public function map($data, $index);
}
