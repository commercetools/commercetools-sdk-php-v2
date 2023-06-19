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

interface SetAssetCustomFieldChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_NAME = 'name';
    public const FIELD_CUSTOM_TYPE_ID = 'customTypeId';
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

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|mixed
     */
    public function getNextValue();

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId();

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
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void;

    /**
     * @param ?AssetChangeValue $asset
     */
    public function setAsset(?AssetChangeValue $asset): void;
}
