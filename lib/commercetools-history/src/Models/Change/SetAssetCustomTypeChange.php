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
use Commercetools\History\Models\Common\CustomFields;

interface SetAssetCustomTypeChange extends Change
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

     * @return null|CustomFields
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFields
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
     * @param ?CustomFields $previousValue
     */
    public function setPreviousValue(?CustomFields $previousValue): void;

    /**
     * @param ?CustomFields $nextValue
     */
    public function setNextValue(?CustomFields $nextValue): void;

    /**
     * @param ?AssetChangeValue $asset
     */
    public function setAsset(?AssetChangeValue $asset): void;
}
