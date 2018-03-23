<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderChangeOrderStateActionModel extends OrderUpdateActionModel implements OrderChangeOrderStateAction {
    const DISCRIMINATOR_VALUE = 'changeOrderState';

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
            $value = $this->raw(OrderChangeOrderStateAction::FIELD_ORDER_STATE);
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
