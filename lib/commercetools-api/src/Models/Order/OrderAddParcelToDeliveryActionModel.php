<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderAddParcelToDeliveryActionModel extends JsonObjectModel implements OrderAddParcelToDeliveryAction
{
    public const DISCRIMINATOR_VALUE = 'addParcelToDelivery';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $deliveryId;

    /**
     *
     * @var ?string
     */
    protected $deliveryKey;

    /**
     *
     * @var ?string
     */
    protected $parcelKey;

    /**
     *
     * @var ?ParcelMeasurements
     */
    protected $measurements;

    /**
     *
     * @var ?TrackingData
     */
    protected $trackingData;

    /**
     *
     * @var ?DeliveryItemCollection
     */
    protected $items;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $deliveryId = null,
        ?string $deliveryKey = null,
        ?string $parcelKey = null,
        ?ParcelMeasurements $measurements = null,
        ?TrackingData $trackingData = null,
        ?DeliveryItemCollection $items = null,
        ?string $action = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->deliveryKey = $deliveryKey;
        $this->parcelKey = $parcelKey;
        $this->measurements = $measurements;
        $this->trackingData = $trackingData;
        $this->items = $items;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> is required for this update action.</p>
     *
     *
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> is required for this update action.</p>
     *
     *
     * @return null|string
     */
    public function getDeliveryKey()
    {
        if (is_null($this->deliveryKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DELIVERY_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryKey = (string) $data;
        }

        return $this->deliveryKey;
    }

    /**
     *
     * @return null|string
     */
    public function getParcelKey()
    {
        if (is_null($this->parcelKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->parcelKey = (string) $data;
        }

        return $this->parcelKey;
    }

    /**
     *
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MEASUREMENTS);
            if (is_null($data)) {
                return null;
            }

            $this->measurements = ParcelMeasurementsModel::of($data);
        }

        return $this->measurements;
    }

    /**
     *
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }

    /**
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }


    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    /**
     * @param ?string $deliveryKey
     */
    public function setDeliveryKey(?string $deliveryKey): void
    {
        $this->deliveryKey = $deliveryKey;
    }

    /**
     * @param ?string $parcelKey
     */
    public function setParcelKey(?string $parcelKey): void
    {
        $this->parcelKey = $parcelKey;
    }

    /**
     * @param ?ParcelMeasurements $measurements
     */
    public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
}
