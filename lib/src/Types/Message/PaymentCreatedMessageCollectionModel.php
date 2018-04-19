<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentCreatedMessageCollectionModel extends MessageCollectionModel implements PaymentCreatedMessageCollection
{

    /**
     * @param PaymentCreatedMessage $value
     * @return PaymentCreatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentCreatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentCreatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentCreatedMessage) {
            $data = $this->mapData(PaymentCreatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
