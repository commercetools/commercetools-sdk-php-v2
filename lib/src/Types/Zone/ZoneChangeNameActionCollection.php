<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollection;


interface ZoneChangeNameActionCollection extends ZoneUpdateActionCollection {
    /**
     * @param $index
     * @return ZoneChangeNameAction
     */
    public function at($index);

    /**
     * @return ZoneChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneChangeNameAction
     */
    public function map($data, $index);
}
