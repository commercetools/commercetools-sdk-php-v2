<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\Order;

class OrderCreatedMessageModel extends MessageModel implements OrderCreatedMessage {
    const DISCRIMINATOR_VALUE = 'OrderCreated';

    /**
     * @var Order
     */
    protected $order;

    /**
     * @return Order
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            $value = $this->raw(OrderCreatedMessage::FIELD_ORDER);
            if (is_null($value)) {
                return $this->mapData(Order::class, null);
            }
            $value = $this->mapData(Order::class, $value);

            $this->order = $value;
        }
        return $this->order;
    }

    /**
     * @param Order $order
     * @return $this
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;

        return $this;
    }

}
