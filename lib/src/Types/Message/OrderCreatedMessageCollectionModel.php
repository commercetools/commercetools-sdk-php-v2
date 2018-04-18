<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderCreatedMessageCollectionModel extends MessageCollectionModel implements OrderCreatedMessageCollection {

    /**
     * @param OrderCreatedMessage $value
     * @return OrderCreatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderCreatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderCreatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderCreatedMessage) {
            $data = $this->mapData(OrderCreatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
