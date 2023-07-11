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

interface DeliveryAddedMessage extends OrderMessage
{
    public const FIELD_DELIVERY = 'delivery';
    public const FIELD_SHIPPING_KEY = 'shippingKey';

    /**
     * <p><a href="ctp:api:type:Delivery">Delivery</a> that was added to the <a href="ctp:api:type:Order">Order</a>. The <a href="ctp:api:type:Delivery">Delivery</a> in the Message body does not contain <a href="ctp:api:type:Parcel">Parcels</a> if those were part of the initial <a href="ctp:api:type:OrderAddDeliveryAction">Add Delivery</a> update action. In that case, the update action produces an additional <a href="ctp:api:type:ParcelAddedToDeliveryMessage">Parcel Added To Delivery</a> Message containing information about the <a href="ctp:api:type:Parcel">Parcels</a>.</p>
     *

     * @return null|Delivery
     */
    public function getDelivery();

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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
