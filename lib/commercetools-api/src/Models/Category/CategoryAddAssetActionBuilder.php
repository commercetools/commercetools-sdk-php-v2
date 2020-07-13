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
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetDraftBuilder ? $this->asset->build() : $this->asset;
    }

    /**
     * <p>When specified, the value might be <code>0</code> and should be lower than the total of the assets list.</p>
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
