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
 * @implements Builder<SetAssetKeyAction>
 */
final class SetAssetKeyActionBuilder implements Builder
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
     * @var ?string
     */
    private $nextValue;

    /**
     * @var ?string
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setAssetKey</code></p>
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
     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|string
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
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
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

    public function build(): SetAssetKeyAction
    {
        return new SetAssetKeyActionModel(
            $this->change,
            $this->asset instanceof AssetActionValueBuilder ? $this->asset->build() : $this->asset,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetAssetKeyActionBuilder
    {
        return new self();
    }
}
