<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetDeliveryItemsAction extends OrderUpdateAction
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ITEMS = 'items';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return DeliveryItemCollection
     */
    public function getItems();

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
