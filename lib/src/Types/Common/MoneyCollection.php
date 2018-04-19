<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface MoneyCollection extends Collection
{
    /**
     * @param $index
     * @return Money
     */
    public function at($index);

    /**
     * @return Money
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Money
     */
    public function map($data, $index);
}
