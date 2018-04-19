<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderChangeShipmentStateAction extends OrderUpdateAction
{
    const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     * @return string
     */
    public function getShipmentState();

    /**
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState);

}
