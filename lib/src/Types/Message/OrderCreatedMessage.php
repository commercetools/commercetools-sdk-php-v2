<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\Order;

interface OrderCreatedMessage extends Message {
    const FIELD_ORDER = 'order';

    /**
     * @return Order
     */
    public function getOrder();

    /**
     * @param Order $order
     * @return $this
     */
    public function setOrder(Order $order);

}
