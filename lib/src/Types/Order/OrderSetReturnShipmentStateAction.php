<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetReturnShipmentStateAction extends OrderUpdateAction
{
    const FIELD_RETURN_ITEM_ID = 'returnItemId';
    const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     * @return string
     */
    public function getReturnItemId();

    /**
     * @return string
     */
    public function getShipmentState();

    /**
     * @param string $returnItemId
     * @return $this
     */
    public function setReturnItemId(string $returnItemId);

    /**
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState);

}
