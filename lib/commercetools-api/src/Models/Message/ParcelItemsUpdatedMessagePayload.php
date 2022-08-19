<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelItemsUpdatedMessagePayload extends OrderMessagePayload
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ITEMS = 'items';
    public const FIELD_OLD_ITEMS = 'oldItems';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getParcelId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> after the <a href="ctp:api:type:OrderSetParcelItemsAction">Set Parcel Items</a> update action.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> before the <a href="ctp:api:type:OrderSetParcelItemsAction">Set Parcel Items</a> update action.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getOldItems();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?DeliveryItemCollection $oldItems
     */
    public function setOldItems(?DeliveryItemCollection $oldItems): void;
}
