<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderRemoveDeliveryActionModel extends OrderUpdateActionModel implements OrderRemoveDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'removeDelivery';

    /**
     * @var string
     */
    protected $deliveryId;

    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(OrderRemoveDeliveryAction::FIELD_DELIVERY_ID);
            $value = (string)$value;
            $this->deliveryId = $value;
        }
        return $this->deliveryId;
    }

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId)
    {
        $this->deliveryId = (string)$deliveryId;

        return $this;
    }

}
