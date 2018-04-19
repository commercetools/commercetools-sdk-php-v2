<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderReturnInfoAddedMessageCollectionModel extends MessageCollectionModel implements OrderReturnInfoAddedMessageCollection
{

    /**
     * @param OrderReturnInfoAddedMessage $value
     * @return OrderReturnInfoAddedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderReturnInfoAddedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderReturnInfoAddedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderReturnInfoAddedMessage) {
            $data = $this->mapData(OrderReturnInfoAddedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
