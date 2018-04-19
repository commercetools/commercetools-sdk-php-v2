<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ParcelTrackingDataUpdatedMessageCollectionModel extends MessageCollectionModel implements ParcelTrackingDataUpdatedMessageCollection
{

    /**
     * @param ParcelTrackingDataUpdatedMessage $value
     * @return ParcelTrackingDataUpdatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ParcelTrackingDataUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ParcelTrackingDataUpdatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ParcelTrackingDataUpdatedMessage) {
            $data = $this->mapData(ParcelTrackingDataUpdatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
