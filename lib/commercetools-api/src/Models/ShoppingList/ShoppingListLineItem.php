<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Type\CustomFields;
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
     *
     * @return DateTimeImmutable|null
     */
    public function getAddedAt();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getDeactivatedAt();
    
    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getProductSlug();
    
    /**
     *
     * @return ProductTypeReference|null
     */
    public function getProductType();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return ProductVariant|null
     */
    public function getVariant();
    
    /**
     *
     * @return int|null
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