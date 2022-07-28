<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductRemoveAssetAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';

    /**
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>If <code>true</code>, only the staged Asset is removed. If <code>false</code>, both the current and staged Asset is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The <code>id</code> of the Asset to remove.</p>
     *

     * @return null|string
     */
    public function getAssetId();

    /**
     * <p>The <code>key</code> of the Asset to remove.</p>
     *

     * @return null|string
     */
    public function getAssetKey();

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
}
