<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class OrderShipmentStateChangedMessageModel extends MessageModel implements OrderShipmentStateChangedMessage
{
    const DISCRIMINATOR_VALUE = 'OrderShipmentStateChanged';

    /**
     * @var string
     */
    protected $shipmentState;

    /**
     * @return string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            $value = $this->raw(OrderShipmentStateChangedMessage::FIELD_SHIPMENT_STATE);
            $value = (string)$value;
            $this->shipmentState = $value;
        }
        return $this->shipmentState;
    }

    /**
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState)
    {
        $this->shipmentState = (string)$shipmentState;

        return $this;
    }

}
