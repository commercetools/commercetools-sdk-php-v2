<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObjectModel;

class ReturnItemDraftModel extends JsonObjectModel implements ReturnItemDraft {
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $lineItemId;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var string
     */
    protected $shipmentState;

    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ReturnItemDraft::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(ReturnItemDraft::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }
    /**
     * @return string
     */
    public function getComment()
    {
        if (is_null($this->comment)) {
            $value = $this->raw(ReturnItemDraft::FIELD_COMMENT);
            $value = (string)$value;
            $this->comment = $value;
        }
        return $this->comment;
    }
    /**
     * @return string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            $value = $this->raw(ReturnItemDraft::FIELD_SHIPMENT_STATE);
            $value = (string)$value;
            $this->shipmentState = $value;
        }
        return $this->shipmentState;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId)
    {
        $this->lineItemId = (string)$lineItemId;

        return $this;
    }
    /**
     * @param string $comment
     * @return $this
     */
    public function setComment(string $comment)
    {
        $this->comment = (string)$comment;

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
