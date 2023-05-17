<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderAddDeliveryAction extends OrderUpdateAction
{
    public const FIELD_DELIVERY_KEY = 'deliveryKey';
    public const FIELD_ITEMS = 'items';
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PARCELS = 'parcels';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier of a Delivery.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey();

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Polymorphic base type that represents a postal address and contact details.
     * Depending on the read or write action, it can be either <a href="ctp:api:type:Address">Address</a> or <a href="ctp:api:type:AddressDraft">AddressDraft</a> that
     * only differ in the data type for the optional <code>custom</code> field.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**

     * @return null|ParcelDraftCollection
     */
    public function getParcels();

    /**
     * <p>Custom Fields for the Transaction.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $deliveryKey
     */
    public function setDeliveryKey(?string $deliveryKey): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;

    /**
     * @param ?ParcelDraftCollection $parcels
     */
    public function setParcels(?ParcelDraftCollection $parcels): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
