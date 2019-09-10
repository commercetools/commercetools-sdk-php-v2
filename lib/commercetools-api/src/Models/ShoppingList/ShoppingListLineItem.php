<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ShoppingListLineItem extends JsonObject
{
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_DEACTIVATED_AT = 'deactivatedAt';
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_PRODUCT_SLUG = 'productSlug';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_VARIANT = 'variant';
    const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|DateTimeImmutable
     */
    public function getDeactivatedAt();

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
     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * @return null|int
     */
    public function getVariantId();

    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    public function setCustom(?CustomFields $custom): void;

    public function setDeactivatedAt(?DateTimeImmutable $deactivatedAt): void;

    public function setId(?string $id): void;

    public function setName(?LocalizedString $name): void;

    public function setProductId(?string $productId): void;

    public function setProductSlug(?LocalizedString $productSlug): void;

    public function setProductType(?ProductTypeReference $productType): void;

    public function setQuantity(?int $quantity): void;

    public function setVariant(?ProductVariant $variant): void;

    public function setVariantId(?int $variantId): void;
}
