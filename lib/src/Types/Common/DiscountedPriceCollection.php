<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface DiscountedPriceCollection extends Collection
{
    /**
     * @param $index
     * @return DiscountedPrice
     */
    public function at($index);

    /**
     * @return DiscountedPrice
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountedPrice
     */
    public function map($data, $index);
}
