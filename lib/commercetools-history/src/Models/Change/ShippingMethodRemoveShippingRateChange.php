<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ShippingRate;
use Commercetools\History\Models\Common\ZoneResourceIdentifier;

interface ShippingMethodRemoveShippingRateChange extends Change
{

    public const FIELD_ZONE = 'zone';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Zone from which the ShippingRate was removed.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ShippingRate
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void;

    /**
     * @param ?ShippingRate $previousValue
     */
    public function setPreviousValue(?ShippingRate $previousValue): void;
}
