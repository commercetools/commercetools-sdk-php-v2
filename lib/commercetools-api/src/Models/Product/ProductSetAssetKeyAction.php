<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductSetAssetKeyAction extends ProductUpdateAction
{

    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * <p>User-defined identifier for the asset.
     * If left blank or set to <code>null</code>, the asset key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getAssetKey();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setStaged(?bool $staged): void;

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;
}
