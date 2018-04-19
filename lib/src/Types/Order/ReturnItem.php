<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface ReturnItem extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_COMMENT = 'comment';
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_CREATED_AT = 'createdAt';

    /**
     * @return string
     */
    public function getId();

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
     * @return string
     */
    public function getPaymentState();

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

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

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState);

    /**
     * @param \DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function setLastModifiedAt($lastModifiedAt);

    /**
     * @param \DateTimeImmutable $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

}
