<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ParcelMeasurementsCollectionModel extends JsonCollection implements ParcelMeasurementsCollection
{

    /**
     * @param ParcelMeasurements $value
     * @return ParcelMeasurementsCollection
     */
    public function add($value) {
        if (!$value instanceof ParcelMeasurements) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ParcelMeasurements
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ParcelMeasurements) {
            $data = $this->mapData(ParcelMeasurements::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
