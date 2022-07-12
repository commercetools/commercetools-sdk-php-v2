<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TrackingData>
 */
final class TrackingDataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $trackingId;

    /**

     * @var ?string
     */
    private $carrier;

    /**

     * @var ?string
     */
    private $provider;

    /**

     * @var ?string
     */
    private $providerTransaction;

    /**

     * @var ?bool
     */
    private $isReturn;

    /**
     * <p>The ID to track one parcel.</p>
     *

     * @return null|string
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * <p>The carrier that delivers the parcel.</p>
     *

     * @return null|string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**

     * @return null|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**

     * @return null|string
     */
    public function getProviderTransaction()
    {
        return $this->providerTransaction;
    }

    /**
     * <p>Flag to distinguish if the parcel is on the way to the customer (false) or on the way back (true).</p>
     *

     * @return null|bool
     */
    public function getIsReturn()
    {
        return $this->isReturn;
    }

    /**
     * @param ?string $trackingId
     * @return $this
     */
    public function withTrackingId(?string $trackingId)
    {
        $this->trackingId = $trackingId;

        return $this;
    }

    /**
     * @param ?string $carrier
     * @return $this
     */
    public function withCarrier(?string $carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @param ?string $provider
     * @return $this
     */
    public function withProvider(?string $provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @param ?string $providerTransaction
     * @return $this
     */
    public function withProviderTransaction(?string $providerTransaction)
    {
        $this->providerTransaction = $providerTransaction;

        return $this;
    }

    /**
     * @param ?bool $isReturn
     * @return $this
     */
    public function withIsReturn(?bool $isReturn)
    {
        $this->isReturn = $isReturn;

        return $this;
    }


    public function build(): TrackingData
    {
        return new TrackingDataModel(
            $this->trackingId,
            $this->carrier,
            $this->provider,
            $this->providerTransaction,
            $this->isReturn
        );
    }

    public static function of(): TrackingDataBuilder
    {
        return new self();
    }
}
