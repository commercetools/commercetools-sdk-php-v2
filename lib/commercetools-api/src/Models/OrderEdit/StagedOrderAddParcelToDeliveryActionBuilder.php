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
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
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

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey()
    {
        return $this->deliveryKey;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getParcelKey()
    {
        return $this->parcelKey;
    }

    /**
     * <p>Value to set.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
    }

    /**
     * <p>Value to set.</p>
     *

     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * <p>Value to set.</p>
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

    public function build(): StagedOrderAddParcelToDeliveryAction
    {
        return new StagedOrderAddParcelToDeliveryActionModel(
            $this->deliveryId,
            $this->deliveryKey,
            $this->parcelKey,
            $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData,
            $this->items,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StagedOrderAddParcelToDeliveryActionBuilder
    {
        return new self();
    }
}
