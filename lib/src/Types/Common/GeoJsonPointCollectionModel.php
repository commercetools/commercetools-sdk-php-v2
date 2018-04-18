<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\GeoJsonCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class GeoJsonPointCollectionModel extends GeoJsonCollectionModel implements GeoJsonPointCollection {

    /**
     * @param GeoJsonPoint $value
     * @return GeoJsonPointCollection
     */
    public function add($value) {
        if (!$value instanceof GeoJsonPoint) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return GeoJsonPoint
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof GeoJsonPoint) {
            $data = $this->mapData(GeoJsonPoint::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
