<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerAddressAddedMessageCollectionModel extends MessageCollectionModel implements CustomerAddressAddedMessageCollection {

    /**
     * @param CustomerAddressAddedMessage $value
     * @return CustomerAddressAddedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerAddressAddedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerAddressAddedMessage) {
            $data = $this->mapData(CustomerAddressAddedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
