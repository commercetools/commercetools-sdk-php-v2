<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TrackingData>
 */
final class TrackingDataBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $isReturn;

    /**
     * @var ?string
     */
    private $carrier;

    /**
     * @var ?string
     */
    private $providerTransaction;

    /**
     * @var ?string
     */
    private $provider;

    /**
     * @var ?string
     */
    private $trackingId;

    /**
     * @return null|bool
     */
    public function getIsReturn()
    {
        return $this->isReturn;
    }

    /**
     * @return null|string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @return null|string
     */
    public function getProviderTransaction()
    {
        return $this->providerTransaction;
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
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * @return $this
     */
    public function withIsReturn(?bool $isReturn)
    {
        $this->isReturn = $isReturn;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCarrier(?string $carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProviderTransaction(?string $providerTransaction)
    {
        $this->providerTransaction = $providerTransaction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProvider(?string $provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrackingId(?string $trackingId)
    {
        $this->trackingId = $trackingId;

        return $this;
    }

    public function build(): TrackingData
    {
        return new TrackingDataModel(
            $this->isReturn,
            $this->carrier,
            $this->providerTransaction,
            $this->provider,
            $this->trackingId
        );
    }

    public static function of(): TrackingDataBuilder
    {
        return new self();
    }
}
