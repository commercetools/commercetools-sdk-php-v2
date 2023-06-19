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
use Commercetools\History\Models\Common\AssetSourceCollection;

/**
 * @implements Builder<SetAssetSourcesChange>
 */
final class SetAssetSourcesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?AssetSourceCollection
     */
    private $previousValue;

    /**

     * @var ?AssetSourceCollection
     */
    private $nextValue;

    /**

     * @var null|AssetChangeValue|AssetChangeValueBuilder
     */
    private $asset;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|AssetSourceCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|AssetSourceCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Information about the updated Asset.</p>
     *

     * @return null|AssetChangeValue
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset;
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
     * @param ?AssetSourceCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?AssetSourceCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?AssetSourceCollection $nextValue
     * @return $this
     */
    public function withNextValue(?AssetSourceCollection $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withAsset() instead
     * @return $this
     */
    public function withAssetBuilder(?AssetChangeValueBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): SetAssetSourcesChange
    {
        return new SetAssetSourcesChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset
        );
    }

    public static function of(): SetAssetSourcesChangeBuilder
    {
        return new self();
    }
}
