<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderStateChangedMessageCollectionModel extends MessageCollectionModel implements OrderStateChangedMessageCollection
{

    /**
     * @param OrderStateChangedMessage $value
     * @return OrderStateChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderStateChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderStateChangedMessage) {
            $data = $this->mapData(OrderStateChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
