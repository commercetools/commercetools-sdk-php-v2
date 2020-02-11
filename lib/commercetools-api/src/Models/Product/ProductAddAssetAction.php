<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductAddAssetAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSET = 'asset';
    public const FIELD_POSITION = 'position';

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
     * @return null|AssetDraft
     */
    public function getAsset();

    /**
     * <p>Position of the new asset inside the existing list (from <code>0</code> to the size of the list)</p>
     *
     * @return null|int
     */
    public function getPosition();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setStaged(?bool $staged): void;

    public function setAsset(?AssetDraft $asset): void;

    public function setPosition(?int $position): void;
}
