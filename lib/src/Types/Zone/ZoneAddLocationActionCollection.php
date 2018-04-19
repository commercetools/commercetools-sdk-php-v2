<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollection;


interface ZoneAddLocationActionCollection extends ZoneUpdateActionCollection
{
    /**
     * @param $index
     * @return ZoneAddLocationAction
     */
    public function at($index);

    /**
     * @return ZoneAddLocationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneAddLocationAction
     */
    public function map($data, $index);
}
