<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryAddressSetMessage extends OrderMessage
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_OLD_ADDRESS = 'oldAddress';
    public const FIELD_SHIPPING_KEY = 'shippingKey';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p><a href="ctp:api:type:Address">Address</a> after the <a href="ctp:api:type:OrderSetDeliveryAddressAction">Set Delivery Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * <p><a href="ctp:api:type:Address">Address</a> before the <a href="ctp:api:type:OrderSetDeliveryAddressAction">Set Delivery Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getOldAddress();

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?Address $oldAddress
     */
    public function setOldAddress(?Address $oldAddress): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;
}
