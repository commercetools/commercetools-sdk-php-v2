<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetParcelTrackingDataChange extends Change
{

    public const FIELD_PARCEL = 'parcel';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setParcelTrackingData</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|ParcelChangeValue
     */
    public function getParcel();

    /**
     * @return null|TrackingData
     */
    public function getNextValue();

    /**
     * @return null|TrackingData
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
     * @param ?TrackingData $nextValue
     */
    public function setNextValue(?TrackingData $nextValue): void;

    /**
     * @param ?TrackingData $previousValue
     */
    public function setPreviousValue(?TrackingData $previousValue): void;
}
