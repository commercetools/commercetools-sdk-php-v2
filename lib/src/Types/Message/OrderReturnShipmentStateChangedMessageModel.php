<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class OrderReturnShipmentStateChangedMessageModel extends MessageModel implements OrderReturnShipmentStateChangedMessage {
    const DISCRIMINATOR_VALUE = 'OrderReturnShipmentStateChanged';

    /**
     * @var string
     */
    protected $returnItemId;
    /**
     * @var string
     */
    protected $returnShipmentState;

    /**
     * @return string
     */
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            $value = $this->raw(OrderReturnShipmentStateChangedMessage::FIELD_RETURN_ITEM_ID);
            $value = (string)$value;
            $this->returnItemId = $value;
        }
        return $this->returnItemId;
    }
    /**
     * @return string
     */
    public function getReturnShipmentState()
    {
        if (is_null($this->returnShipmentState)) {
            $value = $this->raw(OrderReturnShipmentStateChangedMessage::FIELD_RETURN_SHIPMENT_STATE);
            $value = (string)$value;
            $this->returnShipmentState = $value;
        }
        return $this->returnShipmentState;
    }

    /**
     * @param string $returnItemId
     * @return $this
     */
    public function setReturnItemId(string $returnItemId)
    {
        $this->returnItemId = (string)$returnItemId;

        return $this;
    }
    /**
     * @param string $returnShipmentState
     * @return $this
     */
    public function setReturnShipmentState(string $returnShipmentState)
    {
        $this->returnShipmentState = (string)$returnShipmentState;

        return $this;
    }

}
