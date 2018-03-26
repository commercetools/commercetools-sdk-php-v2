<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\Collection;

interface ZoneUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return ZoneUpdateAction
     */
    public function at($index);

    /**
     * @return ZoneUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneUpdateAction
     */
    public function map($data, $index);
}
