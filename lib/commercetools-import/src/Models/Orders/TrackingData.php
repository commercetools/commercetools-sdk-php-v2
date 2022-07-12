<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

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

     * @return null|string
     */
    public function getTrackingId();

    /**

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
