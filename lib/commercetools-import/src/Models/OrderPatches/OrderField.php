<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderField extends JsonObject
{
    public const FIELD_ADD_RETURN_INFO = 'addReturnInfo';
    public const FIELD_ADD_PARCEL_TO_DELIVERY = 'addParcelToDelivery';
    public const FIELD_ADD_DELIVERIES = 'addDeliveries';
    public const FIELD_REMOVE_DELIVERY = 'removeDelivery';
    public const FIELD_REMOVE_PARCEL_FROM_DELIVERY = 'removeParcelFromDelivery';
    public const FIELD_SET_DELIVERY_ADDRESS = 'setDeliveryAddress';
    public const FIELD_SET_PARCEL_MEASUREMENTS = 'setParcelMeasurements';
    public const FIELD_SET_PARCEL_TRACKING_DATA = 'setParcelTrackingData';
    public const FIELD_SET_PARCEL_ITEMS = 'setParcelItems';

    /**
     * <p>Maps to <code>Order.returnInfo</code></p>
     *

     * @return null|ReturnInfo
     */
    public function getAddReturnInfo();

    /**
     * <p>Maps to <code>Order.delivery</code></p>
     *

     * @return null|DeliveryParcel
     */
    public function getAddParcelToDelivery();

    /**
     * <p>Maps to <code>Order.delivery</code></p>
     *

     * @return null|DeliveryDraftCollection
     */
    public function getAddDeliveries();

    /**
     * <p>Maps to <code>Order.removeDelivery</code></p>
     *

     * @return null|RemoveDeliveryDraft
     */
    public function getRemoveDelivery();

    /**
     * <p>Maps to <code>Order.removeParcelFromDelivery</code></p>
     *

     * @return null|RemoveParcelFromDeliveryDraft
     */
    public function getRemoveParcelFromDelivery();

    /**
     * <p>Maps to <code>Order.addressDraft</code></p>
     *

     * @return null|DeliveryAddressDraft
     */
    public function getSetDeliveryAddress();

    /**
     * <p>Maps to <code>Order.parcelMeasurements</code></p>
     *

     * @return null|ParcelMeasurementDraft
     */
    public function getSetParcelMeasurements();

    /**
     * <p>Maps to <code>Order.parcelTrackingData</code></p>
     *

     * @return null|ParcelTrackingData
     */
    public function getSetParcelTrackingData();

    /**
     * <p>Maps to <code>Order.parcelItems</code></p>
     *

     * @return null|ParcelItemsCollection
     */
    public function getSetParcelItems();

    /**
     * @param ?ReturnInfo $addReturnInfo
     */
    public function setAddReturnInfo(?ReturnInfo $addReturnInfo): void;

    /**
     * @param ?DeliveryParcel $addParcelToDelivery
     */
    public function setAddParcelToDelivery(?DeliveryParcel $addParcelToDelivery): void;

    /**
     * @param ?DeliveryDraftCollection $addDeliveries
     */
    public function setAddDeliveries(?DeliveryDraftCollection $addDeliveries): void;

    /**
     * @param ?RemoveDeliveryDraft $removeDelivery
     */
    public function setRemoveDelivery(?RemoveDeliveryDraft $removeDelivery): void;

    /**
     * @param ?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery
     */
    public function setRemoveParcelFromDelivery(?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery): void;

    /**
     * @param ?DeliveryAddressDraft $setDeliveryAddress
     */
    public function setSetDeliveryAddress(?DeliveryAddressDraft $setDeliveryAddress): void;

    /**
     * @param ?ParcelMeasurementDraft $setParcelMeasurements
     */
    public function setSetParcelMeasurements(?ParcelMeasurementDraft $setParcelMeasurements): void;

    /**
     * @param ?ParcelTrackingData $setParcelTrackingData
     */
    public function setSetParcelTrackingData(?ParcelTrackingData $setParcelTrackingData): void;

    /**
     * @param ?ParcelItemsCollection $setParcelItems
     */
    public function setSetParcelItems(?ParcelItemsCollection $setParcelItems): void;
}
