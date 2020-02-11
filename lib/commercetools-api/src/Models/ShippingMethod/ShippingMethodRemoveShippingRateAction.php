<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;

interface ShippingMethodRemoveShippingRateAction extends ShippingMethodUpdateAction
{

    public const FIELD_ZONE = 'zone';
    public const FIELD_SHIPPING_RATE = 'shippingRate';

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    public function setZone(?ZoneResourceIdentifier $zone): void;

    public function setShippingRate(?ShippingRateDraft $shippingRate): void;
}
