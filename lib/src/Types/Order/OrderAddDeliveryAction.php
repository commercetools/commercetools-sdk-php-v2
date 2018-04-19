<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\Address;

interface OrderAddDeliveryAction extends OrderUpdateAction
{
    const FIELD_ITEMS = 'items';
    const FIELD_PARCELS = 'parcels';
    const FIELD_ADDRESS = 'address';

    /**
     * @return DeliveryItemCollection
     */
    public function getItems();

    /**
     * @return ParcelCollection
     */
    public function getParcels();

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items);

    /**
     * @param ParcelCollection $parcels
     * @return $this
     */
    public function setParcels(ParcelCollection $parcels);

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

}
