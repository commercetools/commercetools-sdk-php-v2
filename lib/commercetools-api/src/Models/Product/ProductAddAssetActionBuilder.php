<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductAddAssetAction>
 */
final class ProductAddAssetActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $position;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var AssetDraft|?AssetDraftBuilder
     */
    private $asset;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @return null|int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return $this
     */
    public function withPosition(?int $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAsset(?AssetDraft $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetBuilder(?AssetDraftBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): ProductAddAssetAction
    {
        return new ProductAddAssetActionModel(
            $this->position,
            $this->staged,
            $this->variantId,
            ($this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset),
            $this->sku
        );
    }

    public static function of(): ProductAddAssetActionBuilder
    {
        return new self();
    }
}
