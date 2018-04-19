<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TrackingDataCollectionModel extends JsonCollection implements TrackingDataCollection
{

    /**
     * @param TrackingData $value
     * @return TrackingDataCollection
     */
    public function add($value) {
        if (!$value instanceof TrackingData) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TrackingData
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TrackingData) {
            $data = $this->mapData(TrackingData::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
