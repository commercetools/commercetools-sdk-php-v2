<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelItemsUpdatedMessagePayload>
 */
final class ParcelItemsUpdatedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $parcelId;

    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**

     * @var ?DeliveryItemCollection
     */
    private $oldItems;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> after the <a href="ctp:api:type:OrderSetParcelItemsAction">Set Parcel Items</a> update action.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> before the <a href="ctp:api:type:OrderSetParcelItemsAction">Set Parcel Items</a> update action.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getOldItems()
    {
        return $this->oldItems;
    }

    /**
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
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
     * @param ?DeliveryItemCollection $items
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $oldItems
     * @return $this
     */
    public function withOldItems(?DeliveryItemCollection $oldItems)
    {
        $this->oldItems = $oldItems;

        return $this;
    }


    public function build(): ParcelItemsUpdatedMessagePayload
    {
        return new ParcelItemsUpdatedMessagePayloadModel(
            $this->parcelId,
            $this->deliveryId,
            $this->items,
            $this->oldItems
        );
    }

    public static function of(): ParcelItemsUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}
