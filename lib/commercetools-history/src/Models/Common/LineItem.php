<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface LineItem extends JsonObject
{

    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_PRODUCT_SLUG = 'productSlug';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_VARIANT_ID = 'variantId';

    /**

     * @return null|string
     */
    public function getAddedAt();

    /**

     * @return null|CustomFields
     */
    public function getCustom();

    /**

     * @return null|string
     */
    public function getId();

    /**

     * @return null|LocalizedString
     */
    public function getName();

    /**

     * @return null|string
     */
    public function getProductId();

    /**

     * @return null|LocalizedString
     */
    public function getProductSlug();

    /**

     * @return null|Reference
     */
    public function getProductType();

    /**

     * @return null|int
     */
    public function getQuantity();

    /**

     * @return null|Variant
     */
    public function getVariant();

    /**

     * @return null|int
     */
    public function getVariantId();

    /**
     * @param ?string $addedAt
     */
    public function setAddedAt(?string $addedAt): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?LocalizedString $productSlug
     */
    public function setProductSlug(?LocalizedString $productSlug): void;

    /**
     * @param ?Reference $productType
     */
    public function setProductType(?Reference $productType): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Variant $variant
     */
    public function setVariant(?Variant $variant): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;
}
