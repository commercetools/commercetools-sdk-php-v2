<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderReturnShipmentStateChangedMessageCollectionModel extends MessageCollectionModel implements OrderReturnShipmentStateChangedMessageCollection {

    /**
     * @param OrderReturnShipmentStateChangedMessage $value
     * @return OrderReturnShipmentStateChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderReturnShipmentStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderReturnShipmentStateChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderReturnShipmentStateChangedMessage) {
            $data = $this->mapData(OrderReturnShipmentStateChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
