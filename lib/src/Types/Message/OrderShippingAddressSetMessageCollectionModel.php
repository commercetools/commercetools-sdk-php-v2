<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderShippingAddressSetMessageCollectionModel extends MessageCollectionModel implements OrderShippingAddressSetMessageCollection {

    /**
     * @param OrderShippingAddressSetMessage $value
     * @return OrderShippingAddressSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderShippingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderShippingAddressSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderShippingAddressSetMessage) {
            $data = $this->mapData(OrderShippingAddressSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
