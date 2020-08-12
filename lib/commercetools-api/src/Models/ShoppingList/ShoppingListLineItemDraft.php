<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ShoppingListLineItemDraft extends JsonObject
{
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;
}
