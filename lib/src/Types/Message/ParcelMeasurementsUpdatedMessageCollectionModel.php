<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ParcelMeasurementsUpdatedMessageCollectionModel extends MessageCollectionModel implements ParcelMeasurementsUpdatedMessageCollection
{

    /**
     * @param ParcelMeasurementsUpdatedMessage $value
     * @return ParcelMeasurementsUpdatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ParcelMeasurementsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ParcelMeasurementsUpdatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ParcelMeasurementsUpdatedMessage) {
            $data = $this->mapData(ParcelMeasurementsUpdatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
