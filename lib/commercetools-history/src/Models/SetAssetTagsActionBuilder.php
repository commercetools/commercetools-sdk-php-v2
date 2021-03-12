<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetAssetTagsAction>
 */
final class SetAssetTagsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|AssetActionValue|AssetActionValueBuilder
     */
    private $asset;

    /**
     * @var ?array
     */
    private $nextValue;

    /**
     * @var ?array
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setAssetTags</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|AssetActionValue
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetActionValueBuilder ? $this->asset->build() : $this->asset;
    }

    /**
     * @return null|array
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|array
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?AssetActionValue $asset
     * @return $this
     */
    public function withAsset(?AssetActionValue $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    /**
     * @param ?array $nextValue
     * @return $this
     */
    public function withNextValue(?array $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?array $previousValue
     * @return $this
     */
    public function withPreviousValue(?array $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetBuilder(?AssetActionValueBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): SetAssetTagsAction
    {
        return new SetAssetTagsActionModel(
            $this->change,
            $this->asset instanceof AssetActionValueBuilder ? $this->asset->build() : $this->asset,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetAssetTagsActionBuilder
    {
        return new self();
    }
}
