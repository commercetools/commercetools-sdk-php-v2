<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

interface OrderSetParcelItemsAction extends OrderUpdateAction
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_ITEMS = 'items';

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    public function setParcelId(?string $parcelId): void;

    public function setItems(?DeliveryItemCollection $items): void;
}
