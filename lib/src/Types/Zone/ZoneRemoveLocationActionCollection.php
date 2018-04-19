<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollection;


interface ZoneRemoveLocationActionCollection extends ZoneUpdateActionCollection
{
    /**
     * @param $index
     * @return ZoneRemoveLocationAction
     */
    public function at($index);

    /**
     * @return ZoneRemoveLocationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneRemoveLocationAction
     */
    public function map($data, $index);
}
