<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetParcelMeasurementsChange extends Change
{

    public const FIELD_PARCEL = 'parcel';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setParcelMeasurements</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|ParcelChangeValue
     */
    public function getParcel();

    /**
     * @return null|ParcelMeasurements
     */
    public function getNextValue();

    /**
     * @return null|ParcelMeasurements
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ParcelChangeValue $parcel
     */
    public function setParcel(?ParcelChangeValue $parcel): void;

    /**
     * @param ?ParcelMeasurements $nextValue
     */
    public function setNextValue(?ParcelMeasurements $nextValue): void;

    /**
     * @param ?ParcelMeasurements $previousValue
     */
    public function setPreviousValue(?ParcelMeasurements $previousValue): void;
}
