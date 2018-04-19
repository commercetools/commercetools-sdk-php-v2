<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface DiscountCodeInfoCollection extends Collection
{
    /**
     * @param $index
     * @return DiscountCodeInfo
     */
    public function at($index);

    /**
     * @return DiscountCodeInfo
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeInfo
     */
    public function map($data, $index);
}
