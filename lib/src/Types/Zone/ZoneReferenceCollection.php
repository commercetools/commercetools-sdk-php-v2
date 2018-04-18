<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Common\ReferenceCollection;


interface ZoneReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return ZoneReference
     */
    public function at($index);

    /**
     * @return ZoneReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneReference
     */
    public function map($data, $index);
}
