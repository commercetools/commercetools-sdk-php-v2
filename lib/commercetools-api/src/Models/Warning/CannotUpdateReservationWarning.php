<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CannotUpdateReservationWarning extends WarningObject
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_REQUESTED_QUANTITY = 'requestedQuantity';
    public const FIELD_RESERVED_QUANTITY = 'reservedQuantity';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_SKU = 'sku';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Failed to update the reservation for line item $lineItemId (Product ID: $productId, SKU: $sku, Supply Channel: $supplyChannel) to a quantity of $requestedQuantity. The reserved amount is still $reservedQuantity.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>The ID of the Line Item.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>The quantity that was requested for the Line Item.</p>
     *

     * @return null|float
     */
    public function getRequestedQuantity();

    /**
     * <p>The quantity that remains reserved for the Line Item.</p>
     *

     * @return null|float
     */
    public function getReservedQuantity();

    /**
     * <p>The ID of the Product associated with the Line Item.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>The SKU of the Product Variant associated with the Line Item.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The ID of the Supply Channel associated with the reservation.</p>
     *

     * @return null|string
     */
    public function getSupplyChannel();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?float $requestedQuantity
     */
    public function setRequestedQuantity(?float $requestedQuantity): void;

    /**
     * @param ?float $reservedQuantity
     */
    public function setReservedQuantity(?float $reservedQuantity): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $supplyChannel
     */
    public function setSupplyChannel(?string $supplyChannel): void;
}
