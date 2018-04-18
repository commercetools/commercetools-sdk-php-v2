<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentInteractionAddedMessageCollectionModel extends MessageCollectionModel implements PaymentInteractionAddedMessageCollection {

    /**
     * @param PaymentInteractionAddedMessage $value
     * @return PaymentInteractionAddedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentInteractionAddedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentInteractionAddedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentInteractionAddedMessage) {
            $data = $this->mapData(PaymentInteractionAddedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
