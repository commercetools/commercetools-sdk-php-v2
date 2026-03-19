<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\ParcelChangeValue;

interface SetParcelCustomFieldChange extends Change
{

    public const FIELD_PARCEL = 'parcel';
    public const FIELD_CUSTOM_TYPE_ID = 'customTypeId';
    public const FIELD_NAME = 'name';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Information about the updated Parcel.</p>
     *

     * @return null|ParcelChangeValue
     */
    public function getParcel();

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId();

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

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
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ParcelChangeValue $parcel
     */
    public function setParcel(?ParcelChangeValue $parcel): void;

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void;
}
