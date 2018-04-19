<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ReturnItemModel extends JsonObjectModel implements ReturnItem
{
    /**
     * @var string
     */
    protected $id;
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
     * @var string
     */
    protected $paymentState;
    /**
     * @var \DateTimeImmutable
     */
    protected $lastModifiedAt;
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(ReturnItem::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ReturnItem::FIELD_QUANTITY);
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
            $value = $this->raw(ReturnItem::FIELD_LINE_ITEM_ID);
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
            $value = $this->raw(ReturnItem::FIELD_COMMENT);
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
            $value = $this->raw(ReturnItem::FIELD_SHIPMENT_STATE);
            $value = (string)$value;
            $this->shipmentState = $value;
        }
        return $this->shipmentState;
    }
    /**
     * @return string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            $value = $this->raw(ReturnItem::FIELD_PAYMENT_STATE);
            $value = (string)$value;
            $this->paymentState = $value;
        }
        return $this->paymentState;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            $value = $this->raw(ReturnItem::FIELD_LAST_MODIFIED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->lastModifiedAt = $value;
        }
        return $this->lastModifiedAt;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw(ReturnItem::FIELD_CREATED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->createdAt = $value;
        }
        return $this->createdAt;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
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
    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState)
    {
        $this->paymentState = (string)$paymentState;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $lastModifiedAt
     * @return $this
     */
    public function setLastModifiedAt($lastModifiedAt)
    {
        if ($lastModifiedAt instanceof \DateTime) {
            $lastModifiedAt = \DateTimeImmutable::createFromMutable($lastModifiedAt);
        }
        if (!$lastModifiedAt instanceof \DateTimeImmutable) {
            $lastModifiedAt = new \DateTimeImmutable($lastModifiedAt);
        }
        $this->$lastModifiedAt = $lastModifiedAt;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        if ($createdAt instanceof \DateTime) {
            $createdAt = \DateTimeImmutable::createFromMutable($createdAt);
        }
        if (!$createdAt instanceof \DateTimeImmutable) {
            $createdAt = new \DateTimeImmutable($createdAt);
        }
        $this->$createdAt = $createdAt;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ReturnItem::FIELD_LAST_MODIFIED_AT]) && $data[ReturnItem::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ReturnItem::FIELD_LAST_MODIFIED_AT] = $data[ReturnItem::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[ReturnItem::FIELD_CREATED_AT]) && $data[ReturnItem::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ReturnItem::FIELD_CREATED_AT] = $data[ReturnItem::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
