<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\UpdateCollection;


interface ZoneUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return ZoneUpdate
     */
    public function at($index);

    /**
     * @return ZoneUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneUpdate
     */
    public function map($data, $index);
}
