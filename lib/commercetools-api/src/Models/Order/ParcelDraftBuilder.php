<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelDraft>
 */
final class ParcelDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

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

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier of the Parcel.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Information about the dimensions for the Parcel.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
    }

    /**
     * <p>Shipment tracking information for the Parcel.</p>
     *

     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * <p>Line Items or Custom Line Items delivered in this Parcel.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>Custom Fields for the Parcel.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?ParcelMeasurements $measurements
     * @return $this
     */
    public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

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
     * @param ?DeliveryItemCollection $items
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withMeasurements() instead
     * @return $this
     */
    public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
    {
        $this->measurements = $measurements;

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

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): ParcelDraft
    {
        return new ParcelDraftModel(
            $this->key,
            $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData,
            $this->items,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): ParcelDraftBuilder
    {
        return new self();
    }
}
