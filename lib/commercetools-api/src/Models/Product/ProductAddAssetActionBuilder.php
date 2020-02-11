<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;

/**
 * @implements Builder<ProductAddAssetAction>
 */
final class ProductAddAssetActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var null|AssetDraft|AssetDraftBuilder
     */
    private $asset;

    /**
     * @var ?int
     */
    private $position;

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset;
    }

    /**
     * <p>Position of the new asset inside the existing list (from <code>0</code> to the size of the list)</p>
     *
     * @return null|int
     */
    public function getPosition()
    {
        return $this->position;
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
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

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
    public function withAsset(?AssetDraft $asset)
    {
        $this->asset = $asset;

        return $this;
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
    public function withAssetBuilder(?AssetDraftBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): ProductAddAssetAction
    {
        return new ProductAddAssetActionModel(
            $this->variantId,
            $this->sku,
            $this->staged,
            $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset,
            $this->position
        );
    }

    public static function of(): ProductAddAssetActionBuilder
    {
        return new self();
    }
}
