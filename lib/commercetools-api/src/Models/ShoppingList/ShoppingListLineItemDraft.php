<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use DateTimeImmutable;

interface ShoppingListLineItemDraft extends JsonObject
{
    
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SKU = 'sku';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_VARIANT_ID = 'variantId';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getAddedAt();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return int|null
     */
    public function getVariantId();
    public function setAddedAt(?DateTimeImmutable $addedAt): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setSku(?string $sku): void;
    
    public function setProductId(?string $productId): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setVariantId(?int $variantId): void;
}