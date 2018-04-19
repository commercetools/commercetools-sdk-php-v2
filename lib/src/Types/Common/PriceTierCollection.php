<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface PriceTierCollection extends Collection
{
    /**
     * @param $index
     * @return PriceTier
     */
    public function at($index);

    /**
     * @return PriceTier
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PriceTier
     */
    public function map($data, $index);
}
