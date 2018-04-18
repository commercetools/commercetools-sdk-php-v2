<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\GeoJsonCollection;


interface GeoJsonPointCollection extends GeoJsonCollection {
    /**
     * @param $index
     * @return GeoJsonPoint
     */
    public function at($index);

    /**
     * @return GeoJsonPoint
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return GeoJsonPoint
     */
    public function map($data, $index);
}
