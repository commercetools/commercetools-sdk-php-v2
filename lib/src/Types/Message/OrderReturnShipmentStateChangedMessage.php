<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

interface OrderReturnShipmentStateChangedMessage extends Message
{
    const FIELD_RETURN_ITEM_ID = 'returnItemId';
    const FIELD_RETURN_SHIPMENT_STATE = 'returnShipmentState';

    /**
     * @return string
     */
    public function getReturnItemId();

    /**
     * @return string
     */
    public function getReturnShipmentState();

    /**
     * @param string $returnItemId
     * @return $this
     */
    public function setReturnItemId(string $returnItemId);

    /**
     * @param string $returnShipmentState
     * @return $this
     */
    public function setReturnShipmentState(string $returnShipmentState);

}
