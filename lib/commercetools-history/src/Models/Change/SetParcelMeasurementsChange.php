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
use Commercetools\History\Models\Common\ParcelMeasurements;

interface SetParcelMeasurementsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PARCEL = 'parcel';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getNextValue();

    /**
     * <p>Information about the updated Parcel.</p>
     *

     * @return null|ParcelChangeValue
     */
    public function getParcel();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ParcelMeasurements $previousValue
     */
    public function setPreviousValue(?ParcelMeasurements $previousValue): void;

    /**
     * @param ?ParcelMeasurements $nextValue
     */
    public function setNextValue(?ParcelMeasurements $nextValue): void;

    /**
     * @param ?ParcelChangeValue $parcel
     */
    public function setParcel(?ParcelChangeValue $parcel): void;
}
