<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryRemovedMessage extends OrderMessage
{
    public const FIELD_DELIVERY = 'delivery';

    /**
     * <p>The <a href="ctp:api:type:Delivery">Delivery</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|Delivery
     */
    public function getDelivery();

    /**
     * @param ?Delivery $delivery
     */
    public function setDelivery(?Delivery $delivery): void;
}
