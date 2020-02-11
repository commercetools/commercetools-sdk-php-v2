<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use DateTimeImmutable;

interface ReturnItem extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_ID = 'id';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_TYPE = 'type';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getComment();

    /**
     * @return null|string
     */
    public function getShipmentState();

    /**
     * @return null|string
     */
    public function getPaymentState();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    public function setId(?string $id): void;

    public function setQuantity(?int $quantity): void;

    public function setComment(?string $comment): void;

    public function setShipmentState(?string $shipmentState): void;

    public function setPaymentState(?string $paymentState): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}
