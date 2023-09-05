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
     * <p>Identifier to track the Parcel.</p>
     *

     * @return null|string
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * <p>Name of the carrier that delivers the Parcel.</p>
     *

     * @return null|string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * <p>Name of the provider that serves as facade to several carriers.</p>
     *

     * @return null|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * <p>Transaction identifier with the <code>provider</code>.</p>
     *

     * @return null|string
     */
    public function getProviderTransaction()
    {
        return $this->providerTransaction;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the Parcel is being returned.</li>
     * <li>If <code>false</code>, the Parcel is being delivered to the customer.</li>
     * </ul>
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
