<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ParcelTrackingDataUpdatedMessagePayloadModel extends JsonObjectModel implements ParcelTrackingDataUpdatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ParcelTrackingDataUpdated';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     * @var ?TrackingData
     */
    protected $trackingData;

    public function __construct(
        string $deliveryId = null,
        string $parcelId = null,
        TrackingData $trackingData = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->parcelId = $parcelId;
        $this->trackingData = $trackingData;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ParcelTrackingDataUpdatedMessagePayload::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ParcelTrackingDataUpdatedMessagePayload::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelTrackingDataUpdatedMessagePayload::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }
}
