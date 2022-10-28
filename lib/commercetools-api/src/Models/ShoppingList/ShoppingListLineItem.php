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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ShoppingListLineItem extends JsonObject
{
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DEACTIVATED_AT = 'deactivatedAt';
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_PRODUCT_SLUG = 'productSlug';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_VARIANT_ID = 'variantId';

    /**

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>Serves as value of the <code>custom</code> field on a resource or data type customized with a <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**

     * @return null|DateTimeImmutable
     */
    public function getDeactivatedAt();

    /**
     * <p>Unique identifier of the ShoppingListLineItem.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *

     * @return null|LocalizedString
     */
    public function getProductSlug();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:ProductType">ProductType</a>.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>A concrete sellable good for which inventory can be tracked. Product Variants are generally mapped to specific SKUs.</p>
     *

     * @return null|ProductVariant
     */
    public function getVariant();

    /**

     * @return null|int
     */
    public function getVariantId();

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $deactivatedAt
     */
    public function setDeactivatedAt(?DateTimeImmutable $deactivatedAt): void;

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
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;
}
