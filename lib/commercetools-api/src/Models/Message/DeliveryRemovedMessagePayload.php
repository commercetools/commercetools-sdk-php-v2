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

interface DeliveryRemovedMessagePayload extends OrderMessagePayload
{
    public const FIELD_DELIVERY = 'delivery';
    public const FIELD_SHIPPING_KEY = 'shippingKey';

    /**
     * <p>The <a href="ctp:api:type:Delivery">Delivery</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|Delivery
     */
    public function getDelivery();

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * @param ?Delivery $delivery
     */
    public function setDelivery(?Delivery $delivery): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;
}
