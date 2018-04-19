<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderStateTransitionMessageCollectionModel extends MessageCollectionModel implements OrderStateTransitionMessageCollection
{

    /**
     * @param OrderStateTransitionMessage $value
     * @return OrderStateTransitionMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderStateTransitionMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderStateTransitionMessage) {
            $data = $this->mapData(OrderStateTransitionMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
