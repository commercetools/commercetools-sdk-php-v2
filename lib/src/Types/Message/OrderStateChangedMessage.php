<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

interface OrderStateChangedMessage extends Message {
    const FIELD_ORDER_STATE = 'orderState';

    /**
     * @return string
     */
    public function getOrderState();

    /**
     * @param string $orderState
     * @return $this
     */
    public function setOrderState(string $orderState);

}
