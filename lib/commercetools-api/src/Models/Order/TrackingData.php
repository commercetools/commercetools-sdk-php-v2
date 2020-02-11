<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TrackingData extends JsonObject
{

    public const FIELD_TRACKING_ID = 'trackingId';
    public const FIELD_CARRIER = 'carrier';
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_PROVIDER_TRANSACTION = 'providerTransaction';
    public const FIELD_IS_RETURN = 'isReturn';

    /**
     * <p>The ID to track one parcel.</p>
     *
     * @return null|string
     */
    public function getTrackingId();

    /**
     * <p>The carrier that delivers the parcel.</p>
     *
     * @return null|string
     */
    public function getCarrier();

    /**
     * @return null|string
     */
    public function getProvider();

    /**
     * @return null|string
     */
    public function getProviderTransaction();

    /**
     * <p>Flag to distinguish if the parcel is on the way to the customer (false) or on the way back (true).</p>
     *
     * @return null|bool
     */
    public function getIsReturn();

    public function setTrackingId(?string $trackingId): void;

    public function setCarrier(?string $carrier): void;

    public function setProvider(?string $provider): void;

    public function setProviderTransaction(?string $providerTransaction): void;

    public function setIsReturn(?bool $isReturn): void;
}
