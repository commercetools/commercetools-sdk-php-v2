<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderField>
 */
final class OrderFieldBuilder implements Builder
{
    /**

     * @var null|ReturnInfo|ReturnInfoBuilder
     */
    private $addReturnInfo;

    /**

     * @var null|DeliveryParcel|DeliveryParcelBuilder
     */
    private $addParcelToDelivery;

    /**

     * @var ?DeliveryDraftCollection
     */
    private $addDeliveries;

    /**

     * @var null|RemoveDeliveryDraft|RemoveDeliveryDraftBuilder
     */
    private $removeDelivery;

    /**

     * @var null|RemoveParcelFromDeliveryDraft|RemoveParcelFromDeliveryDraftBuilder
     */
    private $removeParcelFromDelivery;

    /**

     * @var null|DeliveryAddressDraft|DeliveryAddressDraftBuilder
     */
    private $setDeliveryAddress;

    /**

     * @var null|ParcelMeasurementDraft|ParcelMeasurementDraftBuilder
     */
    private $setParcelMeasurements;

    /**

     * @var null|ParcelTrackingData|ParcelTrackingDataBuilder
     */
    private $setParcelTrackingData;

    /**

     * @var ?ParcelItemsCollection
     */
    private $setParcelItems;

    /**
     * <p>Maps to <code>Order.returnInfo</code></p>
     *

     * @return null|ReturnInfo
     */
    public function getAddReturnInfo()
    {
        return $this->addReturnInfo instanceof ReturnInfoBuilder ? $this->addReturnInfo->build() : $this->addReturnInfo;
    }

    /**
     * <p>Maps to <code>Order.delivery</code></p>
     *

     * @return null|DeliveryParcel
     */
    public function getAddParcelToDelivery()
    {
        return $this->addParcelToDelivery instanceof DeliveryParcelBuilder ? $this->addParcelToDelivery->build() : $this->addParcelToDelivery;
    }

    /**
     * <p>Maps to <code>Order.delivery</code></p>
     *

     * @return null|DeliveryDraftCollection
     */
    public function getAddDeliveries()
    {
        return $this->addDeliveries;
    }

    /**
     * <p>Maps to <code>Order.removeDelivery</code></p>
     *

     * @return null|RemoveDeliveryDraft
     */
    public function getRemoveDelivery()
    {
        return $this->removeDelivery instanceof RemoveDeliveryDraftBuilder ? $this->removeDelivery->build() : $this->removeDelivery;
    }

    /**
     * <p>Maps to <code>Order.removeParcelFromDelivery</code></p>
     *

     * @return null|RemoveParcelFromDeliveryDraft
     */
    public function getRemoveParcelFromDelivery()
    {
        return $this->removeParcelFromDelivery instanceof RemoveParcelFromDeliveryDraftBuilder ? $this->removeParcelFromDelivery->build() : $this->removeParcelFromDelivery;
    }

    /**
     * <p>Maps to <code>Order.addressDraft</code></p>
     *

     * @return null|DeliveryAddressDraft
     */
    public function getSetDeliveryAddress()
    {
        return $this->setDeliveryAddress instanceof DeliveryAddressDraftBuilder ? $this->setDeliveryAddress->build() : $this->setDeliveryAddress;
    }

    /**
     * <p>Maps to <code>Order.parcelMeasurements</code></p>
     *

     * @return null|ParcelMeasurementDraft
     */
    public function getSetParcelMeasurements()
    {
        return $this->setParcelMeasurements instanceof ParcelMeasurementDraftBuilder ? $this->setParcelMeasurements->build() : $this->setParcelMeasurements;
    }

    /**
     * <p>Maps to <code>Order.parcelTrackingData</code></p>
     *

     * @return null|ParcelTrackingData
     */
    public function getSetParcelTrackingData()
    {
        return $this->setParcelTrackingData instanceof ParcelTrackingDataBuilder ? $this->setParcelTrackingData->build() : $this->setParcelTrackingData;
    }

    /**
     * <p>Maps to <code>Order.parcelItems</code></p>
     *

     * @return null|ParcelItemsCollection
     */
    public function getSetParcelItems()
    {
        return $this->setParcelItems;
    }

    /**
     * @param ?ReturnInfo $addReturnInfo
     * @return $this
     */
    public function withAddReturnInfo(?ReturnInfo $addReturnInfo)
    {
        $this->addReturnInfo = $addReturnInfo;

        return $this;
    }

    /**
     * @param ?DeliveryParcel $addParcelToDelivery
     * @return $this
     */
    public function withAddParcelToDelivery(?DeliveryParcel $addParcelToDelivery)
    {
        $this->addParcelToDelivery = $addParcelToDelivery;

        return $this;
    }

    /**
     * @param ?DeliveryDraftCollection $addDeliveries
     * @return $this
     */
    public function withAddDeliveries(?DeliveryDraftCollection $addDeliveries)
    {
        $this->addDeliveries = $addDeliveries;

        return $this;
    }

    /**
     * @param ?RemoveDeliveryDraft $removeDelivery
     * @return $this
     */
    public function withRemoveDelivery(?RemoveDeliveryDraft $removeDelivery)
    {
        $this->removeDelivery = $removeDelivery;

        return $this;
    }

    /**
     * @param ?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery
     * @return $this
     */
    public function withRemoveParcelFromDelivery(?RemoveParcelFromDeliveryDraft $removeParcelFromDelivery)
    {
        $this->removeParcelFromDelivery = $removeParcelFromDelivery;

        return $this;
    }

    /**
     * @param ?DeliveryAddressDraft $setDeliveryAddress
     * @return $this
     */
    public function withSetDeliveryAddress(?DeliveryAddressDraft $setDeliveryAddress)
    {
        $this->setDeliveryAddress = $setDeliveryAddress;

        return $this;
    }

    /**
     * @param ?ParcelMeasurementDraft $setParcelMeasurements
     * @return $this
     */
    public function withSetParcelMeasurements(?ParcelMeasurementDraft $setParcelMeasurements)
    {
        $this->setParcelMeasurements = $setParcelMeasurements;

        return $this;
    }

    /**
     * @param ?ParcelTrackingData $setParcelTrackingData
     * @return $this
     */
    public function withSetParcelTrackingData(?ParcelTrackingData $setParcelTrackingData)
    {
        $this->setParcelTrackingData = $setParcelTrackingData;

        return $this;
    }

    /**
     * @param ?ParcelItemsCollection $setParcelItems
     * @return $this
     */
    public function withSetParcelItems(?ParcelItemsCollection $setParcelItems)
    {
        $this->setParcelItems = $setParcelItems;

        return $this;
    }

    /**
     * @deprecated use withAddReturnInfo() instead
     * @return $this
     */
    public function withAddReturnInfoBuilder(?ReturnInfoBuilder $addReturnInfo)
    {
        $this->addReturnInfo = $addReturnInfo;

        return $this;
    }

    /**
     * @deprecated use withAddParcelToDelivery() instead
     * @return $this
     */
    public function withAddParcelToDeliveryBuilder(?DeliveryParcelBuilder $addParcelToDelivery)
    {
        $this->addParcelToDelivery = $addParcelToDelivery;

        return $this;
    }

    /**
     * @deprecated use withRemoveDelivery() instead
     * @return $this
     */
    public function withRemoveDeliveryBuilder(?RemoveDeliveryDraftBuilder $removeDelivery)
    {
        $this->removeDelivery = $removeDelivery;

        return $this;
    }

    /**
     * @deprecated use withRemoveParcelFromDelivery() instead
     * @return $this
     */
    public function withRemoveParcelFromDeliveryBuilder(?RemoveParcelFromDeliveryDraftBuilder $removeParcelFromDelivery)
    {
        $this->removeParcelFromDelivery = $removeParcelFromDelivery;

        return $this;
    }

    /**
     * @deprecated use withSetDeliveryAddress() instead
     * @return $this
     */
    public function withSetDeliveryAddressBuilder(?DeliveryAddressDraftBuilder $setDeliveryAddress)
    {
        $this->setDeliveryAddress = $setDeliveryAddress;

        return $this;
    }

    /**
     * @deprecated use withSetParcelMeasurements() instead
     * @return $this
     */
    public function withSetParcelMeasurementsBuilder(?ParcelMeasurementDraftBuilder $setParcelMeasurements)
    {
        $this->setParcelMeasurements = $setParcelMeasurements;

        return $this;
    }

    /**
     * @deprecated use withSetParcelTrackingData() instead
     * @return $this
     */
    public function withSetParcelTrackingDataBuilder(?ParcelTrackingDataBuilder $setParcelTrackingData)
    {
        $this->setParcelTrackingData = $setParcelTrackingData;

        return $this;
    }

    public function build(): OrderField
    {
        return new OrderFieldModel(
            $this->addReturnInfo instanceof ReturnInfoBuilder ? $this->addReturnInfo->build() : $this->addReturnInfo,
            $this->addParcelToDelivery instanceof DeliveryParcelBuilder ? $this->addParcelToDelivery->build() : $this->addParcelToDelivery,
            $this->addDeliveries,
            $this->removeDelivery instanceof RemoveDeliveryDraftBuilder ? $this->removeDelivery->build() : $this->removeDelivery,
            $this->removeParcelFromDelivery instanceof RemoveParcelFromDeliveryDraftBuilder ? $this->removeParcelFromDelivery->build() : $this->removeParcelFromDelivery,
            $this->setDeliveryAddress instanceof DeliveryAddressDraftBuilder ? $this->setDeliveryAddress->build() : $this->setDeliveryAddress,
            $this->setParcelMeasurements instanceof ParcelMeasurementDraftBuilder ? $this->setParcelMeasurements->build() : $this->setParcelMeasurements,
            $this->setParcelTrackingData instanceof ParcelTrackingDataBuilder ? $this->setParcelTrackingData->build() : $this->setParcelTrackingData,
            $this->setParcelItems
        );
    }

    public static function of(): OrderFieldBuilder
    {
        return new self();
    }
}
