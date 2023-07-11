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
     *
     * @var ?string
     */
    protected $trackingId;

    /**
     *
     * @var ?string
     */
    protected $carrier;

    /**
     *
     * @var ?string
     */
    protected $provider;

    /**
     *
     * @var ?string
     */
    protected $providerTransaction;

    /**
     *
     * @var ?bool
     */
    protected $isReturn;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $trackingId = null,
        ?string $carrier = null,
        ?string $provider = null,
        ?string $providerTransaction = null,
        ?bool $isReturn = null
    ) {
        $this->trackingId = $trackingId;
        $this->carrier = $carrier;
        $this->provider = $provider;
        $this->providerTransaction = $providerTransaction;
        $this->isReturn = $isReturn;
    }

    /**
     * <p>Identifier to track the Parcel.</p>
     *
     *
     * @return null|string
     */
    public function getTrackingId()
    {
        if (is_null($this->trackingId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRACKING_ID);
            if (is_null($data)) {
                return null;
            }
            $this->trackingId = (string) $data;
        }

        return $this->trackingId;
    }

    /**
     * <p>Name of the carrier that delivers the Parcel.</p>
     *
     *
     * @return null|string
     */
    public function getCarrier()
    {
        if (is_null($this->carrier)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CARRIER);
            if (is_null($data)) {
                return null;
            }
            $this->carrier = (string) $data;
        }

        return $this->carrier;
    }

    /**
     * <p>Name of the provider that serves as facade to several carriers.</p>
     *
     *
     * @return null|string
     */
    public function getProvider()
    {
        if (is_null($this->provider)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROVIDER);
            if (is_null($data)) {
                return null;
            }
            $this->provider = (string) $data;
        }

        return $this->provider;
    }

    /**
     * <p>Transaction identifier with the <code>provider</code>.</p>
     *
     *
     * @return null|string
     */
    public function getProviderTransaction()
    {
        if (is_null($this->providerTransaction)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROVIDER_TRANSACTION);
            if (is_null($data)) {
                return null;
            }
            $this->providerTransaction = (string) $data;
        }

        return $this->providerTransaction;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the Parcel is being returned.</li>
     * <li>If <code>false</code>, the Parcel is being delivered to the customer.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getIsReturn()
    {
        if (is_null($this->isReturn)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_RETURN);
            if (is_null($data)) {
                return null;
            }
            $this->isReturn = (bool) $data;
        }

        return $this->isReturn;
    }


    /**
     * @param ?string $trackingId
     */
    public function setTrackingId(?string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }

    /**
     * @param ?string $carrier
     */
    public function setCarrier(?string $carrier): void
    {
        $this->carrier = $carrier;
    }

    /**
     * @param ?string $provider
     */
    public function setProvider(?string $provider): void
    {
        $this->provider = $provider;
    }

    /**
     * @param ?string $providerTransaction
     */
    public function setProviderTransaction(?string $providerTransaction): void
    {
        $this->providerTransaction = $providerTransaction;
    }

    /**
     * @param ?bool $isReturn
     */
    public function setIsReturn(?bool $isReturn): void
    {
        $this->isReturn = $isReturn;
    }
}
