<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\Delivery;

interface DeliveryAddedMessage extends Message
{
    const FIELD_DELIVERY = 'delivery';

    /**
     * @return Delivery
     */
    public function getDelivery();

    /**
     * @param Delivery $delivery
     * @return $this
     */
    public function setDelivery(Delivery $delivery);

}
