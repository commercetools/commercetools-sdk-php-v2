<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TrackingDataModel extends JsonObjectModel implements TrackingData
{
    /**
     * @var ?string
     */
    protected $trackingId;

    /**
     * @var ?string
     */
    protected $carrier;

    /**
     * @var ?string
     */
    protected $provider;

    /**
     * @var ?string
     */
    protected $providerTransaction;

    /**
     * @var ?bool
     */
    protected $isReturn;


    public function __construct(
        string $trackingId = null,
        string $carrier = null,
        string $provider = null,
        string $providerTransaction = null,
        bool $isReturn = null
    ) {
        $this->trackingId = $trackingId;
        $this->carrier = $carrier;
        $this->provider = $provider;
        $this->providerTransaction = $providerTransaction;
        $this->isReturn = $isReturn;
    }

    /**
     * <p>The ID to track one parcel.</p>
     *
     * @return null|string
     */
    public function getTrackingId()
    {
        if (is_null($this->trackingId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_TRACKING_ID);
            if (is_null($data)) {
                return null;
            }
            $this->trackingId = (string) $data;
        }

        return $this->trackingId;
    }

    /**
     * <p>The carrier that delivers the parcel.</p>
     *
     * @return null|string
     */
    public function getCarrier()
    {
        if (is_null($this->carrier)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_CARRIER);
            if (is_null($data)) {
                return null;
            }
            $this->carrier = (string) $data;
        }

        return $this->carrier;
    }

    /**
     * @return null|string
     */
    public function getProvider()
    {
        if (is_null($this->provider)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_PROVIDER);
            if (is_null($data)) {
                return null;
            }
            $this->provider = (string) $data;
        }

        return $this->provider;
    }

    /**
     * @return null|string
     */
    public function getProviderTransaction()
    {
        if (is_null($this->providerTransaction)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_PROVIDER_TRANSACTION);
            if (is_null($data)) {
                return null;
            }
            $this->providerTransaction = (string) $data;
        }

        return $this->providerTransaction;
    }

    /**
     * <p>Flag to distinguish if the parcel is on the way to the customer (false) or on the way back (true).</p>
     *
     * @return null|bool
     */
    public function getIsReturn()
    {
        if (is_null($this->isReturn)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(TrackingData::FIELD_IS_RETURN);
            if (is_null($data)) {
                return null;
            }
            $this->isReturn = (bool) $data;
        }

        return $this->isReturn;
    }

    public function setTrackingId(?string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }

    public function setCarrier(?string $carrier): void
    {
        $this->carrier = $carrier;
    }

    public function setProvider(?string $provider): void
    {
        $this->provider = $provider;
    }

    public function setProviderTransaction(?string $providerTransaction): void
    {
        $this->providerTransaction = $providerTransaction;
    }

    public function setIsReturn(?bool $isReturn): void
    {
        $this->isReturn = $isReturn;
    }
}
