<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderAddParcelToDeliveryAction>
 */
final class OrderAddParcelToDeliveryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @var TrackingData|?TrackingDataBuilder
     */
    private $trackingData;

    /**
     * @var ParcelMeasurements|?ParcelMeasurementsBuilder
     */
    private $measurements;

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
    }

    /**
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

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
    public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

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

    /**
     * @return $this
     */
    public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }

    public function build(): OrderAddParcelToDeliveryAction
    {
        return new OrderAddParcelToDeliveryActionModel(
            $this->deliveryId,
            $this->items,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData),
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements)
        );
    }

    public static function of(): OrderAddParcelToDeliveryActionBuilder
    {
        return new self();
    }
}
