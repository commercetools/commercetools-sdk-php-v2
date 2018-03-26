<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Base\Collection;

interface DiscountCodeUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return DiscountCodeUpdateAction
     */
    public function at($index);

    /**
     * @return DiscountCodeUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeUpdateAction
     */
    public function map($data, $index);
}
