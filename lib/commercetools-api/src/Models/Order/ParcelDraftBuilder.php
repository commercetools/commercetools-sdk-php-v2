<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ParcelDraft>
 */
final class ParcelDraftBuilder implements Builder
{
    /**
     * @var null|ParcelMeasurements|ParcelMeasurementsBuilder
     */
    private $measurements;

    /**
     * @var null|TrackingData|TrackingDataBuilder
     */
    private $trackingData;

    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * <p>The delivery items contained in this parcel.</p>
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
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
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

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
    public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
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

    public function build(): ParcelDraft
    {
        return new ParcelDraftModel(
            $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData,
            $this->items
        );
    }

    public static function of(): ParcelDraftBuilder
    {
        return new self();
    }
}
