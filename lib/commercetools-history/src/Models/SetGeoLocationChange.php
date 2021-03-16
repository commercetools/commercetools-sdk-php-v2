<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetGeoLocationChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>setGeoLocation</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|GeoLocation
     */
    public function getNextValue();

    /**
     * @return null|GeoLocation
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?GeoLocation $nextValue
     */
    public function setNextValue(?GeoLocation $nextValue): void;

    /**
     * @param ?GeoLocation $previousValue
     */
    public function setPreviousValue(?GeoLocation $previousValue): void;
}
