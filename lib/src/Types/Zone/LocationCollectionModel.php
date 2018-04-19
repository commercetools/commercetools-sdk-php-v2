<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class LocationCollectionModel extends JsonCollection implements LocationCollection
{

    /**
     * @param Location $value
     * @return LocationCollection
     */
    public function add($value) {
        if (!$value instanceof Location) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Location
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Location) {
            $data = $this->mapData(Location::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
