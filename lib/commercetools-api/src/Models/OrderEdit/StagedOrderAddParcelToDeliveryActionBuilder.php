<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Api\Models\Order\ParcelMeasurementsBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderAddParcelToDeliveryAction>
 */
final class StagedOrderAddParcelToDeliveryActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?string
     */
    private $deliveryKey;

    /**

     * @var ?string
     */
    private $parcelKey;

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
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey()
    {
        return $this->deliveryKey;
    }

    /**

     * @return null|string
     */
    public function getParcelKey()
    {
        return $this->parcelKey;
    }

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

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
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
     * @param ?string $deliveryKey
     * @return $this
     */
    public function withDeliveryKey(?string $deliveryKey)
    {
        $this->deliveryKey = $deliveryKey;

        return $this;
    }

    /**
     * @param ?string $parcelKey
     * @return $this
     */
    public function withParcelKey(?string $parcelKey)
    {
        $this->parcelKey = $parcelKey;

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

    public function build(): StagedOrderAddParcelToDeliveryAction
    {
        return new StagedOrderAddParcelToDeliveryActionModel(
            $this->deliveryId,
            $this->deliveryKey,
            $this->parcelKey,
            $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData,
            $this->items
        );
    }

    public static function of(): StagedOrderAddParcelToDeliveryActionBuilder
    {
        return new self();
    }
}
