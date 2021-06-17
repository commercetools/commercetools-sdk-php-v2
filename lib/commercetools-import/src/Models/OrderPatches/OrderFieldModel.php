<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderFieldModel extends JsonObjectModel implements OrderField
{
    /**
     * @var ?ReturnInfo
     */
    protected $addReturnInfo;

    /**
     * @var ?DeliveryParcel
     */
    protected $addParcelToDelivery;

    /**
     * @var ?DeliveryDraftCollection
     */
    protected $addDeliveries;

    /**
     * @var ?RemoveDeliveryDraft
     */
    protected $removeDelivery;

    /**
     * @var ?RemoveParcelFromDeliveryDraft
     */
    protected $removeParcelFromDelivery;

    /**
     * @var ?DeliveryAddressDraft
     */
    protected $setDeliveryAddress;

    /**
     * @var ?ParcelMeasurementDraft
     */
    protected $setParcelMeasurements;

    /**
     * @var ?ParcelTrackingData
     */
    protected $setParcelTrackingData;

    /**
     * @var ?ParcelItemsCollection
     */
    protected $setParcelItems;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ReturnInfo $addReturnInfo = null,
        ?DeliveryParcel $addParcelToDelivery = null,
        ?DeliveryDraftCollection $addDeliveries = null,
        ?RemoveDeliveryDraft $removeDelivery = null,
        ?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery = null,
        ?DeliveryAddressDraft $setDeliveryAddress = null,
        ?ParcelMeasurementDraft $setParcelMeasurements = null,
        ?ParcelTrackingData $setParcelTrackingData = null,
        ?ParcelItemsCollection $setParcelItems = null
    ) {
        $this->addReturnInfo = $addReturnInfo;
        $this->addParcelToDelivery = $addParcelToDelivery;
        $this->addDeliveries = $addDeliveries;
        $this->removeDelivery = $removeDelivery;
        $this->removeParcelFromDelivery = $removeParcelFromDelivery;
        $this->setDeliveryAddress = $setDeliveryAddress;
        $this->setParcelMeasurements = $setParcelMeasurements;
        $this->setParcelTrackingData = $setParcelTrackingData;
        $this->setParcelItems = $setParcelItems;
    }

    /**
     * <p>Maps to <code>Order.returnInfo</code></p>
     *
     * @return null|ReturnInfo
     */
    public function getAddReturnInfo()
    {
        if (is_null($this->addReturnInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADD_RETURN_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->addReturnInfo = ReturnInfoModel::of($data);
        }

        return $this->addReturnInfo;
    }

    /**
     * <p>Maps to <code>Order.delivery</code></p>
     *
     * @return null|DeliveryParcel
     */
    public function getAddParcelToDelivery()
    {
        if (is_null($this->addParcelToDelivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADD_PARCEL_TO_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->addParcelToDelivery = DeliveryParcelModel::of($data);
        }

        return $this->addParcelToDelivery;
    }

    /**
     * <p>Maps to <code>Order.delivery</code></p>
     *
     * @return null|DeliveryDraftCollection
     */
    public function getAddDeliveries()
    {
        if (is_null($this->addDeliveries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADD_DELIVERIES);
            if (is_null($data)) {
                return null;
            }
            $this->addDeliveries = DeliveryDraftCollection::fromArray($data);
        }

        return $this->addDeliveries;
    }

    /**
     * <p>Maps to <code>Order.removeDelivery</code></p>
     *
     * @return null|RemoveDeliveryDraft
     */
    public function getRemoveDelivery()
    {
        if (is_null($this->removeDelivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REMOVE_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->removeDelivery = RemoveDeliveryDraftModel::of($data);
        }

        return $this->removeDelivery;
    }

    /**
     * <p>Maps to <code>Order.removeParcelFromDelivery</code></p>
     *
     * @return null|RemoveParcelFromDeliveryDraft
     */
    public function getRemoveParcelFromDelivery()
    {
        if (is_null($this->removeParcelFromDelivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REMOVE_PARCEL_FROM_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->removeParcelFromDelivery = RemoveParcelFromDeliveryDraftModel::of($data);
        }

        return $this->removeParcelFromDelivery;
    }

    /**
     * <p>Maps to <code>Order.addressDraft</code></p>
     *
     * @return null|DeliveryAddressDraft
     */
    public function getSetDeliveryAddress()
    {
        if (is_null($this->setDeliveryAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SET_DELIVERY_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->setDeliveryAddress = DeliveryAddressDraftModel::of($data);
        }

        return $this->setDeliveryAddress;
    }

    /**
     * <p>Maps to <code>Order.parcelMeasurements</code></p>
     *
     * @return null|ParcelMeasurementDraft
     */
    public function getSetParcelMeasurements()
    {
        if (is_null($this->setParcelMeasurements)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SET_PARCEL_MEASUREMENTS);
            if (is_null($data)) {
                return null;
            }

            $this->setParcelMeasurements = ParcelMeasurementDraftModel::of($data);
        }

        return $this->setParcelMeasurements;
    }

    /**
     * <p>Maps to <code>Order.parcelTrackingData</code></p>
     *
     * @return null|ParcelTrackingData
     */
    public function getSetParcelTrackingData()
    {
        if (is_null($this->setParcelTrackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SET_PARCEL_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->setParcelTrackingData = ParcelTrackingDataModel::of($data);
        }

        return $this->setParcelTrackingData;
    }

    /**
     * <p>Maps to <code>Order.parcelItems</code></p>
     *
     * @return null|ParcelItemsCollection
     */
    public function getSetParcelItems()
    {
        if (is_null($this->setParcelItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SET_PARCEL_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->setParcelItems = ParcelItemsCollection::fromArray($data);
        }

        return $this->setParcelItems;
    }


    /**
     * @param ?ReturnInfo $addReturnInfo
     */
    public function setAddReturnInfo(?ReturnInfo $addReturnInfo): void
    {
        $this->addReturnInfo = $addReturnInfo;
    }

    /**
     * @param ?DeliveryParcel $addParcelToDelivery
     */
    public function setAddParcelToDelivery(?DeliveryParcel $addParcelToDelivery): void
    {
        $this->addParcelToDelivery = $addParcelToDelivery;
    }

    /**
     * @param ?DeliveryDraftCollection $addDeliveries
     */
    public function setAddDeliveries(?DeliveryDraftCollection $addDeliveries): void
    {
        $this->addDeliveries = $addDeliveries;
    }

    /**
     * @param ?RemoveDeliveryDraft $removeDelivery
     */
    public function setRemoveDelivery(?RemoveDeliveryDraft $removeDelivery): void
    {
        $this->removeDelivery = $removeDelivery;
    }

    /**
     * @param ?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery
     */
    public function setRemoveParcelFromDelivery(?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery): void
    {
        $this->removeParcelFromDelivery = $removeParcelFromDelivery;
    }

    /**
     * @param ?DeliveryAddressDraft $setDeliveryAddress
     */
    public function setSetDeliveryAddress(?DeliveryAddressDraft $setDeliveryAddress): void
    {
        $this->setDeliveryAddress = $setDeliveryAddress;
    }

    /**
     * @param ?ParcelMeasurementDraft $setParcelMeasurements
     */
    public function setSetParcelMeasurements(?ParcelMeasurementDraft $setParcelMeasurements): void
    {
        $this->setParcelMeasurements = $setParcelMeasurements;
    }

    /**
     * @param ?ParcelTrackingData $setParcelTrackingData
     */
    public function setSetParcelTrackingData(?ParcelTrackingData $setParcelTrackingData): void
    {
        $this->setParcelTrackingData = $setParcelTrackingData;
    }

    /**
     * @param ?ParcelItemsCollection $setParcelItems
     */
    public function setSetParcelItems(?ParcelItemsCollection $setParcelItems): void
    {
        $this->setParcelItems = $setParcelItems;
    }
}
