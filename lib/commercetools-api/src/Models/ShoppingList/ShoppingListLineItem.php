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
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRODUCT_SLUG = 'productSlug';

    /**
     * <p>Date and time (UTC) the ShoppingListLineItem was added to the ShoppingList.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>Custom Fields of the ShoppingListLineItem.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>If the Product or Product Variant is deleted, <code>deactivatedAt</code> is the date and time (UTC) of deletion.</p>
     * <p>This data is updated in an <a href="/general-concepts#eventual-consistency">eventual consistent manner</a> when the Product Variant cannot be ordered anymore.</p>
     *

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
     * <p>User-defined identifier of the ShoppingListLineItem. It is unique per <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Product.</p>
     * <p>This data is updated in an <a href="/general-concepts#eventual-consistency">eventual consistent manner</a> when the Product's name changes.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Unique identifier of a <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>The Product Type defining the Attributes of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>Number of Products in the ShoppingListLineItem.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> the ShoppingListLineItem refers to. If not set, the ShoppingListLineItem refers to the Master Variant.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Data of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     * <p>Returned when expanded using <code>expand=lineItems[*].variant</code>. You cannot expand only a single element of the array.</p>
     *

     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * <p>Slug of the current <a href="ctp:api:type:ProductData">ProductData</a>.</p>
     * <p>Returned when expanded using <code>expand=lineItems[*].productSlug</code>. You cannot expand only a single element of the array.</p>
     *

     * @return null|LocalizedString
     */
    public function getProductSlug();

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
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void;

    /**
     * @param ?LocalizedString $productSlug
     */
    public function setProductSlug(?LocalizedString $productSlug): void;
}
