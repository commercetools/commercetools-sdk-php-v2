<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollection;


interface ZoneSetDescriptionActionCollection extends ZoneUpdateActionCollection
{
    /**
     * @param $index
     * @return ZoneSetDescriptionAction
     */
    public function at($index);

    /**
     * @return ZoneSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneSetDescriptionAction
     */
    public function map($data, $index);
}
