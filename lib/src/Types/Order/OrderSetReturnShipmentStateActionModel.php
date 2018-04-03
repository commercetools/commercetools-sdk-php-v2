<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderSetReturnShipmentStateActionModel extends OrderUpdateActionModel implements OrderSetReturnShipmentStateAction {
    const DISCRIMINATOR_VALUE = 'setReturnShipmentState';

    /**
     * @var string
     */
    protected $returnItemId;
    /**
     * @var string
     */
    protected $shipmentState;

    /**
     * @return string
     */
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            $value = $this->raw(OrderSetReturnShipmentStateAction::FIELD_RETURN_ITEM_ID);
            $value = (string)$value;
            $this->returnItemId = $value;
        }
        return $this->returnItemId;
    }
    /**
     * @return string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            $value = $this->raw(OrderSetReturnShipmentStateAction::FIELD_SHIPMENT_STATE);
            $value = (string)$value;
            $this->shipmentState = $value;
        }
        return $this->shipmentState;
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
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState)
    {
        $this->shipmentState = (string)$shipmentState;

        return $this;
    }

}
