<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodSetCarrierAction extends ShippingMethodUpdateAction
{
    public const FIELD_CARRIER = 'carrier';

    /**
     * <p>Name of the carrier that delivers the parcel, for example <code>DHL</code>. If <code>carrier</code> is absent or <code>null</code>, it is removed if it exists.</p>
     *

     * @return null|string
     */
    public function getCarrier();

    /**
     * @param ?string $carrier
     */
    public function setCarrier(?string $carrier): void;
}
