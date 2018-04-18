<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentStatusStateTransitionMessageCollectionModel extends MessageCollectionModel implements PaymentStatusStateTransitionMessageCollection {

    /**
     * @param PaymentStatusStateTransitionMessage $value
     * @return PaymentStatusStateTransitionMessageCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentStatusStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentStatusStateTransitionMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentStatusStateTransitionMessage) {
            $data = $this->mapData(PaymentStatusStateTransitionMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
