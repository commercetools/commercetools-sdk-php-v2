<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderSetParcelTrackingDataActionModel extends JsonObjectModel implements OrderSetParcelTrackingDataAction
{
    const DISCRIMINATOR_VALUE = 'setParcelTrackingData';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?TrackingData
     */
    protected $trackingData;

    /**
     * @var ?string
     */
    protected $parcelId;

    public function __construct(
        string $action = null,
        TrackingData $trackingData = null,
        string $parcelId = null
    ) {
        $this->action = $action;
        $this->trackingData = $trackingData;
        $this->parcelId = $parcelId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderSetParcelTrackingDataAction::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderSetParcelTrackingDataAction::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }
}
