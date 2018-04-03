<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderSetParcelTrackingDataActionModel extends OrderUpdateActionModel implements OrderSetParcelTrackingDataAction {
    const DISCRIMINATOR_VALUE = 'setParcelTrackingData';

    /**
     * @var string
     */
    protected $parcelId;
    /**
     * @var TrackingData
     */
    protected $trackingData;

    /**
     * @return string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            $value = $this->raw(OrderSetParcelTrackingDataAction::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }
    /**
     * @return TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            $value = $this->raw(OrderSetParcelTrackingDataAction::FIELD_TRACKING_DATA);
            if (is_null($value)) {
                return $this->mapData(TrackingData::class, null);
            }
            $value = $this->mapData(TrackingData::class, $value);

            $this->trackingData = $value;
        }
        return $this->trackingData;
    }

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId)
    {
        $this->parcelId = (string)$parcelId;

        return $this;
    }
    /**
     * @param TrackingData $trackingData
     * @return $this
     */
    public function setTrackingData(TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

}
