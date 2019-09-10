<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ReturnItem extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_ID = 'id';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_TYPE = 'type';
    const FIELD_COMMENT = 'comment';
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_CREATED_AT = 'createdAt';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return string|null
     */
    public function getType();
    
    /**
     *
     * @return string|null
     */
    public function getComment();
    
    /**
     *
     * @return string|null
     */
    public function getShipmentState();
    
    /**
     *
     * @return string|null
     */
    public function getPaymentState();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getLastModifiedAt();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    public function setId(?string $id): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setType(?string $type): void;
    
    public function setComment(?string $comment): void;
    
    public function setShipmentState(?string $shipmentState): void;
    
    public function setPaymentState(?string $paymentState): void;
    
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}