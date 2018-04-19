<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderPaymentChangedMessageCollectionModel extends MessageCollectionModel implements OrderPaymentChangedMessageCollection
{

    /**
     * @param OrderPaymentChangedMessage $value
     * @return OrderPaymentChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderPaymentChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderPaymentChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderPaymentChangedMessage) {
            $data = $this->mapData(OrderPaymentChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
