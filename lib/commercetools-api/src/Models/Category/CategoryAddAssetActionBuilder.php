<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryAddAssetAction>
 */
final class CategoryAddAssetActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $position;

    /**
     * @var AssetDraft|?AssetDraftBuilder
     */
    private $asset;

    /**
     * @return null|int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset;
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
    public function withAsset(?AssetDraft $asset)
    {
        $this->asset = $asset;

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

    public function build(): CategoryAddAssetAction
    {
        return new CategoryAddAssetActionModel(
            $this->position,
            ($this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset)
        );
    }

    public static function of(): CategoryAddAssetActionBuilder
    {
        return new self();
    }
}
