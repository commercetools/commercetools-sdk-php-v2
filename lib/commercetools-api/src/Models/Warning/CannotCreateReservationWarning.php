<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CannotCreateReservationWarning extends WarningObject
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_SKU = 'sku';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_QUANTITY = 'quantity';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Failed to create a reservation for product $productId (SKU: $sku, Supply Channel: $supplyChannel) with quantity $quantity.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>The ID of the Product for which the reservation could not be created.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>The SKU of the Product Variant for which the reservation could not be created.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The ID of the Supply Channel for which the reservation could not be created.</p>
     *

     * @return null|string
     */
    public function getSupplyChannel();

    /**
     * <p>The quantity for which the reservation could not be created.</p>
     *

     * @return null|float
     */
    public function getQuantity();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

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

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void;
}
