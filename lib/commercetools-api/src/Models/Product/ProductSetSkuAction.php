<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductSetSkuAction extends ProductUpdateAction
{

    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>SKU must be unique.
     * If left blank or set to <code>null</code>, the sku is unset/removed.</p>
     *
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setStaged(?bool $staged): void;
}
