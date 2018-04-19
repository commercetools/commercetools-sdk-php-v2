<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface GeoJsonCollection extends Collection
{
    /**
     * @param $index
     * @return GeoJson
     */
    public function at($index);

    /**
     * @return GeoJson
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return GeoJson
     */
    public function map($data, $index);
}
