<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\DeliveryItem;
use Commercetools\Types\Order\DeliveryItemCollection;

interface ParcelItemsUpdatedMessage extends Message
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ITEMS = 'items';

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return DeliveryItemCollection
     */
    public function getItems();

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId);

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId);

    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items);

}
