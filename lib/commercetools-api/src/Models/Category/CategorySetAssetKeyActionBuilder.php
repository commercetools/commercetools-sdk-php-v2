<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySetAssetKeyAction>
 */
final class CategorySetAssetKeyActionBuilder implements Builder
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
     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * <p>User-defined identifier for the asset.
     * If left blank or set to <code>null</code>, the asset key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
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

    public function build(): CategorySetAssetKeyAction
    {
        return new CategorySetAssetKeyActionModel(
            $this->assetId,
            $this->assetKey
        );
    }

    public static function of(): CategorySetAssetKeyActionBuilder
    {
        return new self();
    }
}
