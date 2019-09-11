<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use DateTimeImmutable;

interface MyShoppingListAddLineItemAction extends MyShoppingListUpdateAction
{
    const FIELD_SKU = 'sku';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';

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
    public function getVariantId();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    public function setSku(?string $sku): void;

    public function setProductId(?string $productId): void;

    public function setVariantId(?int $variantId): void;

    public function setQuantity(?int $quantity): void;

    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    public function setCustom(?CustomFieldsDraft $custom): void;
}
