<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\DeliveryItem;
use Commercetools\Types\Order\DeliveryItemCollection;

class ParcelItemsUpdatedMessageModel extends MessageModel implements ParcelItemsUpdatedMessage
{
    const DISCRIMINATOR_VALUE = 'ParcelItemsUpdated';

    /**
     * @var string
     */
    protected $parcelId;
    /**
     * @var string
     */
    protected $deliveryId;
    /**
     * @var DeliveryItemCollection
     */
    protected $items;

    /**
     * @return string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            $value = $this->raw(ParcelItemsUpdatedMessage::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }
    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(ParcelItemsUpdatedMessage::FIELD_DELIVERY_ID);
            $value = (string)$value;
            $this->deliveryId = $value;
        }
        return $this->deliveryId;
    }
    /**
     * @return DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(ParcelItemsUpdatedMessage::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(DeliveryItemCollection::class, null);
            }
            $value = $this->mapData(DeliveryItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
    }

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId)
    {
        $this->parcelId = (string)$parcelId;

        return $this;
    }
    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId)
    {
        $this->deliveryId = (string)$deliveryId;

        return $this;
    }
    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

}
