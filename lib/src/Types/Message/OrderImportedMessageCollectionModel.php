<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderImportedMessageCollectionModel extends MessageCollectionModel implements OrderImportedMessageCollection {

    /**
     * @param OrderImportedMessage $value
     * @return OrderImportedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderImportedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderImportedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderImportedMessage) {
            $data = $this->mapData(OrderImportedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
