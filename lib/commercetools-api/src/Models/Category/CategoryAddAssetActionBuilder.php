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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryAddAssetAction>
 */
final class CategoryAddAssetActionBuilder implements Builder
{
    /**
     * @var null|AssetDraft|AssetDraftBuilder
     */
    private $asset;

    /**
     * @var ?int
     */
    private $position;

    /**
     * <p>Value to append.</p>
     *
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset;
    }

    /**
     * <p>Position in the array at which the Asset should be put. When specified, the value must be between <code>0</code> and the total number of Assets minus <code>1</code>.</p>
     *
     * @return null|int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param ?AssetDraft $asset
     * @return $this
     */
    public function withAsset(?AssetDraft $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    /**
     * @param ?int $position
     * @return $this
     */
    public function withPosition(?int $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @deprecated use withAsset() instead
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
            $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset,
            $this->position
        );
    }

    public static function of(): CategoryAddAssetActionBuilder
    {
        return new self();
    }
}
