<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentTransactionStateChangedMessageCollectionModel extends MessageCollectionModel implements PaymentTransactionStateChangedMessageCollection
{

    /**
     * @param PaymentTransactionStateChangedMessage $value
     * @return PaymentTransactionStateChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentTransactionStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentTransactionStateChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentTransactionStateChangedMessage) {
            $data = $this->mapData(PaymentTransactionStateChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
