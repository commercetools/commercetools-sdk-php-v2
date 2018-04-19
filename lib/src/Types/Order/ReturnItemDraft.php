<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface ReturnItemDraft extends JsonObject
{
    const FIELD_QUANTITY = 'quantity';
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_COMMENT = 'comment';
    const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return string
     */
    public function getComment();

    /**
     * @return string
     */
    public function getShipmentState();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param string $comment
     * @return $this
     */
    public function setComment(string $comment);

    /**
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState);

}
