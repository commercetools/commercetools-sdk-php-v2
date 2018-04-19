<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderShipmentStateChangedMessageCollectionModel extends MessageCollectionModel implements OrderShipmentStateChangedMessageCollection
{

    /**
     * @param OrderShipmentStateChangedMessage $value
     * @return OrderShipmentStateChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderShipmentStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderShipmentStateChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderShipmentStateChangedMessage) {
            $data = $this->mapData(OrderShipmentStateChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
