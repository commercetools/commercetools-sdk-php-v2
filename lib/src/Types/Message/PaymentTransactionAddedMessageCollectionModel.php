<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentTransactionAddedMessageCollectionModel extends MessageCollectionModel implements PaymentTransactionAddedMessageCollection {

    /**
     * @param PaymentTransactionAddedMessage $value
     * @return PaymentTransactionAddedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentTransactionAddedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentTransactionAddedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentTransactionAddedMessage) {
            $data = $this->mapData(PaymentTransactionAddedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
