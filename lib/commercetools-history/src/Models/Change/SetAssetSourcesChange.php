<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\AssetChangeValue;
use Commercetools\History\Models\Common\AssetSourceCollection;

interface SetAssetSourcesChange extends Change
{

    public const FIELD_ASSET = 'asset';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>setAssetSources</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|AssetChangeValue
     */
    public function getAsset();

    /**
     * @return null|AssetSourceCollection
     */
    public function getNextValue();

    /**
     * @return null|AssetSourceCollection
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?AssetChangeValue $asset
     */
    public function setAsset(?AssetChangeValue $asset): void;

    /**
     * @param ?AssetSourceCollection $nextValue
     */
    public function setNextValue(?AssetSourceCollection $nextValue): void;

    /**
     * @param ?AssetSourceCollection $previousValue
     */
    public function setPreviousValue(?AssetSourceCollection $previousValue): void;
}
