<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ParcelRemovedFromDeliveryMessageCollectionModel extends MessageCollectionModel implements ParcelRemovedFromDeliveryMessageCollection
{

    /**
     * @param ParcelRemovedFromDeliveryMessage $value
     * @return ParcelRemovedFromDeliveryMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ParcelRemovedFromDeliveryMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ParcelRemovedFromDeliveryMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ParcelRemovedFromDeliveryMessage) {
            $data = $this->mapData(ParcelRemovedFromDeliveryMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
