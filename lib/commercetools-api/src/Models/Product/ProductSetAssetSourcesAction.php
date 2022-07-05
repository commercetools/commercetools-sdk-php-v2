<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetAssetSourcesAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';
    public const FIELD_SOURCES = 'sources';

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

     * @return null|string
     */
    public function getAssetKey();

    /**

     * @return null|AssetSourceCollection
     */
    public function getSources();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?string $assetId
     */
    public function setAssetId(?string $assetId): void;

    /**
     * @param ?string $assetKey
     */
    public function setAssetKey(?string $assetKey): void;

    /**
     * @param ?AssetSourceCollection $sources
     */
    public function setSources(?AssetSourceCollection $sources): void;
}
