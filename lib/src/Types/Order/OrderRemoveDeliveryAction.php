<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderRemoveDeliveryAction extends OrderUpdateAction {
    const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId);

}
