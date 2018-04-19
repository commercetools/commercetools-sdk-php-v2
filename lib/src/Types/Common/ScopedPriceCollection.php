<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface ScopedPriceCollection extends Collection
{
    /**
     * @param $index
     * @return ScopedPrice
     */
    public function at($index);

    /**
     * @return ScopedPrice
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ScopedPrice
     */
    public function map($data, $index);
}
