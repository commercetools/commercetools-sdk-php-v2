<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeValue\AssetChangeValue;
use Commercetools\History\Models\ChangeValue\AssetChangeValueBuilder;

/**
 * @implements Builder<SetAssetTagsChange>
 */
final class SetAssetTagsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|AssetChangeValue|AssetChangeValueBuilder
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

     * @return null|AssetChangeValue
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset;
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
     * @param ?AssetChangeValue $asset
     * @return $this
     */
    public function withAsset(?AssetChangeValue $asset)
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
     * @deprecated use withAsset() instead
     * @return $this
     */
    public function withAssetBuilder(?AssetChangeValueBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): SetAssetTagsChange
    {
        return new SetAssetTagsChangeModel(
            $this->change,
            $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetAssetTagsChangeBuilder
    {
        return new self();
    }
}
