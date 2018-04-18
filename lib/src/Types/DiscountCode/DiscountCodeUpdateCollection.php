<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\UpdateCollection;


interface DiscountCodeUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return DiscountCodeUpdate
     */
    public function at($index);

    /**
     * @return DiscountCodeUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeUpdate
     */
    public function map($data, $index);
}
