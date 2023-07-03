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

interface SetAssetTagsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_ASSET = 'asset';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|array
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|array
     */
    public function getNextValue();

    /**
     * <p>Information about the updated Asset.</p>
     *

     * @return null|AssetChangeValue
     */
    public function getAsset();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?array $previousValue
     */
    public function setPreviousValue(?array $previousValue): void;

    /**
     * @param ?array $nextValue
     */
    public function setNextValue(?array $nextValue): void;

    /**
     * @param ?AssetChangeValue $asset
     */
    public function setAsset(?AssetChangeValue $asset): void;
}
