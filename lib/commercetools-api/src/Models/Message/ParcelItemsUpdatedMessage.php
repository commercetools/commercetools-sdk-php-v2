<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\DeliveryItemCollection;

interface ParcelItemsUpdatedMessage extends Message
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ITEMS = 'items';
    const FIELD_OLD_ITEMS = 'oldItems';

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getOldItems();

    public function setParcelId(?string $parcelId): void;

    public function setDeliveryId(?string $deliveryId): void;

    public function setItems(?DeliveryItemCollection $items): void;

    public function setOldItems(?DeliveryItemCollection $oldItems): void;
}
