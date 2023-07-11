<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
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
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * <p>Unique identifier of the Return Item.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Number of Line Items or Custom Line Items returned.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined description for the return.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * <p>Shipment status of the Return Item.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Payment status of the Return Item:</p>
     * <ul>
     * <li><code>NonRefundable</code>, for items in the <code>Advised</code> <a href="ctp:api:type:ReturnShipmentState">ReturnShipmentState</a></li>
     * <li><code>Initial</code>, for items in the <code>Returned</code> <a href="ctp:api:type:ReturnShipmentState">ReturnShipmentState</a></li>
     * </ul>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Custom Fields of the Return Item.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Date and time (UTC) the Return Item was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Date and time (UTC) the Return Item was intitially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}
