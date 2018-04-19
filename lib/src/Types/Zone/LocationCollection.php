<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\Collection;

interface LocationCollection extends Collection
{
    /**
     * @param $index
     * @return Location
     */
    public function at($index);

    /**
     * @return Location
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Location
     */
    public function map($data, $index);
}
