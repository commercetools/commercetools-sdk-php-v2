<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelTrackingDataUpdatedMessagePayload>
 */
final class ParcelTrackingDataUpdatedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?string
     */
    private $parcelId;

    /**

     * @var null|TrackingData|TrackingDataBuilder
     */
    private $trackingData;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * <p>The <a href="ctp:api:type:TrackingData">Tracking Data</a> that was added to the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    /**
     * @param ?TrackingData $trackingData
     * @return $this
     */
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    /**
     * @deprecated use withTrackingData() instead
     * @return $this
     */
    public function withTrackingDataBuilder(?TrackingDataBuilder $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    public function build(): ParcelTrackingDataUpdatedMessagePayload
    {
        return new ParcelTrackingDataUpdatedMessagePayloadModel(
            $this->deliveryId,
            $this->parcelId,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData
        );
    }

    public static function of(): ParcelTrackingDataUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}
