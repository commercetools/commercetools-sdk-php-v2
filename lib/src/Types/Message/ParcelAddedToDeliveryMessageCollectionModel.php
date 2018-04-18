<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ParcelAddedToDeliveryMessageCollectionModel extends MessageCollectionModel implements ParcelAddedToDeliveryMessageCollection {

    /**
     * @param ParcelAddedToDeliveryMessage $value
     * @return ParcelAddedToDeliveryMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ParcelAddedToDeliveryMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ParcelAddedToDeliveryMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ParcelAddedToDeliveryMessage) {
            $data = $this->mapData(ParcelAddedToDeliveryMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
