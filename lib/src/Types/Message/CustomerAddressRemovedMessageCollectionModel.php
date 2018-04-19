<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerAddressRemovedMessageCollectionModel extends MessageCollectionModel implements CustomerAddressRemovedMessageCollection
{

    /**
     * @param CustomerAddressRemovedMessage $value
     * @return CustomerAddressRemovedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerAddressRemovedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerAddressRemovedMessage) {
            $data = $this->mapData(CustomerAddressRemovedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
