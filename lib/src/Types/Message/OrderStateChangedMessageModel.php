<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class OrderStateChangedMessageModel extends MessageModel implements OrderStateChangedMessage
{
    const DISCRIMINATOR_VALUE = 'OrderStateChanged';

    /**
     * @var string
     */
    protected $orderState;

    /**
     * @return string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            $value = $this->raw(OrderStateChangedMessage::FIELD_ORDER_STATE);
            $value = (string)$value;
            $this->orderState = $value;
        }
        return $this->orderState;
    }

    /**
     * @param string $orderState
     * @return $this
     */
    public function setOrderState(string $orderState)
    {
        $this->orderState = (string)$orderState;

        return $this;
    }

}
