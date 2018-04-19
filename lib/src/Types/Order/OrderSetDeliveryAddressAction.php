<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\Address;

interface OrderSetDeliveryAddressAction extends OrderUpdateAction
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ADDRESS = 'address';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId);

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

}
