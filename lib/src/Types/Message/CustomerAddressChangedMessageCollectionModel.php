<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerAddressChangedMessageCollectionModel extends MessageCollectionModel implements CustomerAddressChangedMessageCollection
{

    /**
     * @param CustomerAddressChangedMessage $value
     * @return CustomerAddressChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerAddressChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerAddressChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerAddressChangedMessage) {
            $data = $this->mapData(CustomerAddressChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
