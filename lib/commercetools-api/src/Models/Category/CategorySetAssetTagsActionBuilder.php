<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySetAssetTagsAction>
 */
final class CategorySetAssetTagsActionBuilder implements Builder
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
     * @var ?array
     */
    private $tags;

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
     * @return null|array
     */
    public function getTags()
    {
        return $this->tags;
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
    public function withTags(?array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function build(): CategorySetAssetTagsAction
    {
        return new CategorySetAssetTagsActionModel(
            $this->assetId,
            $this->assetKey,
            $this->tags
        );
    }

    public static function of(): CategorySetAssetTagsActionBuilder
    {
        return new self();
    }
}
