<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TrackingData extends JsonObject
{
    public const FIELD_TRACKING_ID = 'trackingId';
    public const FIELD_CARRIER = 'carrier';
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_PROVIDER_TRANSACTION = 'providerTransaction';
    public const FIELD_IS_RETURN = 'isReturn';

    /**
     * <p>Identifier to track the Parcel.</p>
     *

     * @return null|string
     */
    public function getTrackingId();

    /**
     * <p>Name of the carrier that delivers the Parcel.</p>
     *

     * @return null|string
     */
    public function getCarrier();

    /**
     * <p>Name of the provider that serves as facade to several carriers.</p>
     *

     * @return null|string
     */
    public function getProvider();

    /**
     * <p>Transaction identifier with the <code>provider</code>.</p>
     *

     * @return null|string
     */
    public function getProviderTransaction();

    /**
     * <ul>
     * <li>If <code>true</code>, the Parcel is being returned.</li>
     * <li>If <code>false</code>, the Parcel is being delivered to the customer.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getIsReturn();

    /**
     * @param ?string $trackingId
     */
    public function setTrackingId(?string $trackingId): void;

    /**
     * @param ?string $carrier
     */
    public function setCarrier(?string $carrier): void;

    /**
     * @param ?string $provider
     */
    public function setProvider(?string $provider): void;

    /**
     * @param ?string $providerTransaction
     */
    public function setProviderTransaction(?string $providerTransaction): void;

    /**
     * @param ?bool $isReturn
     */
    public function setIsReturn(?bool $isReturn): void;
}
