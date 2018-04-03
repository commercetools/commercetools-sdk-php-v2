<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderSetOrderNumberActionModel extends OrderUpdateActionModel implements OrderSetOrderNumberAction {
    const DISCRIMINATOR_VALUE = 'setOrderNumber';

    /**
     * @var string
     */
    protected $orderNumber;

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            $value = $this->raw(OrderSetOrderNumberAction::FIELD_ORDER_NUMBER);
            $value = (string)$value;
            $this->orderNumber = $value;
        }
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber)
    {
        $this->orderNumber = (string)$orderNumber;

        return $this;
    }

}
