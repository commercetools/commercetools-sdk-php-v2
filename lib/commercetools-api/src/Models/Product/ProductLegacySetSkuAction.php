<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface ProductLegacySetSkuAction extends ProductUpdateAction
{
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|int
     */
    public function getVariantId();

    public function setSku(?string $sku): void;

    public function setVariantId(?int $variantId): void;
}
