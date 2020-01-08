<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySetAssetSourcesAction>
 */
final class CategorySetAssetSourcesActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $assetId;

    /**
     * @var ?string
     */
    private $assetKey;

    /**
     * @var ?AssetSourceCollection
     */
    private $sources;

    /**
     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @return $this
     */
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSources(?AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }

    public function build(): CategorySetAssetSourcesAction
    {
        return new CategorySetAssetSourcesActionModel(
            $this->assetId,
            $this->assetKey,
            $this->sources
        );
    }

    public static function of(): CategorySetAssetSourcesActionBuilder
    {
        return new self();
    }
}
