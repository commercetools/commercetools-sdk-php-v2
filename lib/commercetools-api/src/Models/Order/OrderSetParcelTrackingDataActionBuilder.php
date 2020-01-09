<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetParcelTrackingDataAction>
 */
final class OrderSetParcelTrackingDataActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @var null|TrackingData|TrackingDataBuilder
     */
    private $trackingData;

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrackingDataBuilder(?TrackingDataBuilder $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    public function build(): OrderSetParcelTrackingDataAction
    {
        return new OrderSetParcelTrackingDataActionModel(
            $this->parcelId,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData
        );
    }

    public static function of(): OrderSetParcelTrackingDataActionBuilder
    {
        return new self();
    }
}
