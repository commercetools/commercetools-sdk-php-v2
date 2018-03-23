<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetParcelItemsAction extends OrderUpdateAction {
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_ITEMS = 'items';

    /**
     * @return string
     */
    public function getParcelId();

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
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items);

}
